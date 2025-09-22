<?php

namespace Pear;
class PearValidate {
    // Array de palabras spans
    private $blockedWords = array('viagra','boshka','Porn','xxx' ,'porno','gratis','casino' ,'sexy','cialis','roberttah', 'pharmacy', 'lottery', 'earn money','seo', 'free gift', 'work from home');

    /**
     * Constructor de la clase PearValidate.
     */
    public function __construct(){
        
    }

    /**
     * Valida si los campos requeridos están presentes en un array.
     *
     * @param array $array - El array que contiene los datos a validar.
     * @param array $valoresRequeridos - Un array que contiene los nombres de los campos que son requeridos.
     * @param array $clavesIgnoradas - Un array opcional que contiene los nombres de los campos que deben ser ignorados en la validación.
     * @return mixed - Devuelve `true` si todos los campos requeridos están presentes y no están vacíos. 
     * Si falta algún campo requerido, devuelve el nombre del campo que falta.
     */
    public static  function validateFields($array, $valoresRequeridos, $clavesIgnoradas = []) {
        $array =(array)$array;
        foreach ($valoresRequeridos as $valor) {
            if (!isset($array[$valor]) || empty($array[$valor])) {
                return $valor; // Devolver el nombre del campo requerido que falta
            }
        }
        
        foreach ($clavesIgnoradas as $clave) {
            unset($array[$clave]);
        }
    
        return true;
    }

    /**
     * Valida si una dirección de correo electrónico dada es válida.
     *
     * @param string $email - La dirección de correo electrónico que se va a validar.
     * @return bool - Devuelve `true` si la dirección de correo electrónico es válida, `false` si no lo es.
     */
    public function email($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true; // El correo electrónico es válido
        } else {
            return false; // El correo electrónico no es válido
        }
    }

    /**
     * Verifica si un texto dado contiene palabras prohibidas.
     *
     * @param string $text - El texto que se va a analizar.
     * @return bool - Devuelve `true` si el texto contiene al menos una palabra prohibida, `false` si no contiene ninguna.
     */
    public function spanWords($text){
        // Convertimos el texto a minúsculas para hacer la comparación insensible a mayúsculas
        $text = strtolower($text);

        // Verificamos si alguna de las palabras prohibidas está presente en el texto
        foreach ($this->blockedWords as $word) {
            if (strpos($text, $word) !== false) {
                return true; // El texto contiene una palabra prohibida
            }
        }

        return false; // El texto no contiene ninguna palabra prohibida
    }

    /**
     * Verifica si un texto dado contiene caracteres cirílicos, lo que podría indicar presencia de texto en ruso.
     *
     * @param string $texto - El texto que se va a analizar.
     * @return bool - Devuelve `true` si el texto contiene caracteres cirílicos, lo que sugiere presencia de texto en ruso, `false` si no contiene ninguno.
     */
    public function spanRuso($texto) {
        // Expresión regular para detectar caracteres cirílicos
        $patron_ruso = '/[\p{Cyrillic}]+/u';
        
        // Buscar palabras rusas en el texto
        if (preg_match($patron_ruso, $texto)) {
            // Palabra rusa detectada
            return true;
        } else {
            // No se encontraron palabras rusas
            return false;
        }
    }

    /**
     * Verifica un token de reCAPTCHA con la API de Google.
     *
     * @param string $token - El token reCAPTCHA que se va a verificar.
     * @param string $secretKey - La clave secreta del sitio que se va a utilizar en la verificación.
     * @return bool - Devuelve `true` si el token reCAPTCHA es válido, `false` si no lo es.
     */
    public function verifyRecaptcha($token, $secretKey) {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => $secretKey,
            'response' => $token
        );
    
        $options = array(
            'http' => array(
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
    
        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        $result = json_decode($response, true);
    
        return $result['success'];
    }
    // BLOQUEAR CORREO
    public function blockMail($correo, int $limiteIntentos =3) {
        $archivoBloqueados = __DIR__.'correos_bloqueados.txt';
    
        // Verificar si el archivo existe
        if (file_exists($archivoBloqueados)) {
            // Leer el contenido del archivo y decodificar el JSON
            $jsonContenido = file_get_contents($archivoBloqueados);
            $correosBloqueados = json_decode($jsonContenido, true);
            
            // Verificar si el correo ha llegado más de $limiteIntentos veces
            $ocurrencias = isset($correosBloqueados[$correo]) ? $correosBloqueados[$correo] : 0;
            if ($ocurrencias >= $limiteIntentos) {
                return false; // Correo bloqueado
            }
        } else {
            $correosBloqueados = [];
        }
    
        // Agregar el correo al arreglo de correos bloqueados
        $correosBloqueados[$correo] = isset($correosBloqueados[$correo]) ? $correosBloqueados[$correo] + 1 : 1;
    
        // Serializar el arreglo de correos bloqueados a formato JSON
        $nuevoContenido = json_encode($correosBloqueados);
    
        // Escribir el JSON en el archivo de texto
        file_put_contents($archivoBloqueados, $nuevoContenido);
        
        return true; // Correo registrado correctamente
    }
     
}