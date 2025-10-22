import Swiper from 'swiper';
import 'swiper/css/swiper.css';
import flatpickr from 'flatpickr';
import 'flatpickr/dist/flatpickr.min.css';
import 'fslightbox';

// ***
import {Spinner} from './loandig';
import Swal from 'sweetalert2';
import 'bootstrap';
import * as bootstrap from 'bootstrap';
// Photo Swipe Lightbox //
import PhotoSwipeLightbox from 'photoswipe/lightbox';
import 'photoswipe/style.css';

const lightbox = new PhotoSwipeLightbox({
  gallery: '#map-tour',
  children: 'a',
  pswpModule: () => import('photoswipe')
});
lightbox.init();

// Photo Swipe Lightbox //

document.addEventListener('shown.bs.tab', function (event) {
  // Actualiza todos los carousels
  document.querySelectorAll('.mainCarousel').forEach(function (carouselEl) {
    if (carouselEl.swiper) {
      carouselEl.swiper.update();
    }
  });
});


// swiper
var swiper = new Swiper(".sliderReviews", {
  allowTouchMove: false, 
  simulateTouch: false,  
  loop: true,
    speed: 1500,
    autoplay: {
      delay: 6000, 
      disableOnInteraction: false
    },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiperMainCarousel = new Swiper(".mainCarousel", {
  preloadImages: true,
  watchSlidesProgress: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 5,
    },
    700: {
      slidesPerView: 2,
      spaceBetween: 15,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true, 
  },
});

var swipermain = new Swiper(".mySwiper1", {
  slidesPerView: 2,
  spaceBetween: 10,
  breakpoints: {
    300: {
      slidesPerView: 1,
      spaceBetween: 5,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 5,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swipermain = new Swiper(".mySwipersingle", {
  slidesPerView: 3,
  spaceBetween: 10,
  
  breakpoints: {
    300: {
      slidesPerView: 1,
      spaceBetween: 5,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 5,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".mySwiperToursHome", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  coverflowEffect: {
    rotate: 30,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false, 
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    },
  },
  breakpoints: {
    100: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
  },
});

// / CONTACT FORM NEW SCRIPT PAGE
const fromContact = document.getElementById('contact_form');
const load = new Spinner({
  selector: ".loandig",
  width: 25,
  height: 25,
  text: "loandig..",
  color: "#d7b672",
  background: "#fff",
});
if (fromContact) {
    const urls=fromContact.getAttribute('data-action');
   fromContact.addEventListener('submit',(e)=>{
      e.preventDefault()
      load.active()
    const peardata = new FormData(fromContact);
    peardata.append('type','contact');    
    // peardata.append('action', PEARSCRIPTC.action_contact);

    fetch(urls, { method: 'POST', body: peardata })
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
          load.hide()
            throw new Error('The request was not successful');
        }
    })
    .then(data => {
        console.log(data)
        if(data.status===200) {
          load.hide()
          fromContact.reset()
          Swal.fire({
            title: data.title,
            text:  data.message,
            icon: "success",
            showCancelButton: false,
            showConfirmButton:false,
            showCloseButton: true,
          });
        }else if(data.status==500) {
          load.hide()
          Swal.fire({
            title: data.title,
            text:  data.message,
            icon: "error",
            showCancelButton: false,
            showConfirmButton:false,
            showCloseButton: true,
          });
        }else{
          load.hide()
          fromContact.reset()
          Swal.fire({
            title: data,
            text: null,
            icon: "error",
            showCancelButton: false,
            showConfirmButton: true,
            confirmButtonText: 'Update',
            showCloseButton: true,
            confirmButtonColor: '#000', // Cambia esto al color que desees
            customClass: {
              confirmButton: ' btn-sm rounded-0 shadow-0' // Agrega aquí la clase personalizada que quieras
            }
          }).then((result) => {
            if (result.isConfirmed) {
              location.reload(); // Esto recarga la página
            }
          });
                 
        }        
    })
    .catch(error => {
        load.hide()
        console.error( error);  
        Swal.fire({
            title: 'Error',
            text: 'An unexpected error occurred. Please try again later.',
            icon: 'error',
          });    

    });
   })
}

// FORM IQUIRE NOW
const fromInquire = document.getElementById('fromInquire');
const loaded = new Spinner({
  selector: ".loaded",
  width: 25,
  height: 25,
  text: "loandig..",
  color: "#d7b672",
  background: "#fff",
});
if (fromInquire) {
    const urls=fromInquire.getAttribute('data-action');
    fromInquire.addEventListener('submit',(e)=>{
      e.preventDefault()
      loaded.active()
    const peardata = new FormData(fromInquire);
    peardata.append('type','inquire');    
    // peardata.append('action', PEARSCRIPTC.action_contact);

    fetch(urls, { method: 'POST', body: peardata })
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
          loaded.hide()
            throw new Error('The request was not successful');
        }
    })
    .then(data => {
        console.log(data)
        if(data.status===200) {
          loaded.hide()
          fromInquire.reset()
          Swal.fire({
            title: data.title,
            text:  data.message,
            icon: "success",
            showCancelButton: false,
            showConfirmButton:false,
            showCloseButton: true,
          });
          document.querySelector("#closed-inquiry-form")?.click();
        }else if(data.status==500) {
          loaded.hide()
          Swal.fire({
            title: data.title,
            text:  data.message,
            icon: "error",
            showCancelButton: false,
            showConfirmButton:false,
            showCloseButton: true,
          });
        }else{
          loaded.hide()
          fromInquire.reset()
          Swal.fire({
            title: data,
            text: null,
            icon: "error",
            showCancelButton: false,
            showConfirmButton: true,
            confirmButtonText: 'Update',
            showCloseButton: true,
            confirmButtonColor: '#000', // Cambia esto al color que desees
            customClass: {
              confirmButton: ' btn-sm rounded-0 shadow-0' // Agrega aquí la clase personalizada que quieras
            }
          }).then((result) => {
            if (result.isConfirmed) {
              location.reload(); // Esto recarga la página
            }
          });
                 
        }        
    })
    .catch(error => {
      loaded.hide()
        console.error( error);  
        Swal.fire({
            title: 'Error',
            text: 'An unexpected error occurred. Please try again later.',
            icon: 'error',
          });    

    });
   })
}
// FORM BOOKING NOW
const fromBooking = document.getElementById('fromBooking');
const loadbooking = new Spinner({
  selector: ".loadbooking",
  width: 25,
  height: 25,
  text: "loandig..",
  color: "#d7b672",
  background: "#fff",
});
if (fromBooking) {
    const urls=fromBooking.getAttribute('data-action');
    fromBooking.addEventListener('submit',(e)=>{
      e.preventDefault()
      loadbooking.active()
    const peardata = new FormData();
    peardata.append('tour',fromBooking.tour.value);    
    peardata.append('Tipo de Serivicio',fromBooking.typeService.value);    
    peardata.append('Fecha de Inicio',fromBooking.dateStart.value);    
    peardata.append('Fecha Alternativa',fromBooking.alternativeDate.value);  
    // ***
    let auxCount = 0;
    let travellersForm = "#item-travellers-card-";
    let form = document.querySelector(travellersForm+auxCount);
    while(form){
      let auxInputs = form.querySelectorAll("input");
      let arg = "";
      auxInputs.forEach(input => {
        if(input.name !== "travellers-restrictions-0" && input.name !== "travellers-student-0") arg += input.value + ", ";
      });
      auxCount++;
      form = document.querySelector(travellersForm+auxCount);
      peardata.append(`Pasajero ${auxCount}`,arg);
    }
    // ***
    peardata.append('Nombre de Contacto',fromBooking.name.value);
    peardata.append('email',fromBooking.email.value);
    peardata.append('Telefono de contacto',fromBooking.phone.value);
    peardata.append('Tipo de Habitacion',fromBooking.typeRoom.value);
    peardata.append('Informacion del tipo de habitacion',fromBooking.typeRoomInformation.value);
    peardata.append('Ubicacion del hotel del pasajero',fromBooking.hotelLocation.value);
    peardata.append('Numeros de emergencias',fromBooking.emergencyNumber.value);
    peardata.append('Como nos encontro',fromBooking.how_they_found.value);

    peardata.append('type','booking');    
    // peardata.append('action', PEARSCRIPTC.action_contact);

    fetch(urls, { method: 'POST', body: peardata })
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
          loadbooking.hide()
            throw new Error('The request was not successful');
        }
    })
    .then(data => {
        console.log(data)
        if(data.status===200) {
          loadbooking.hide()
          fromBooking.reset()
          Swal.fire({
            title: data.title,
            text:  data.message,
            icon: "success",
            showCancelButton: false,
            showConfirmButton:false,
            showCloseButton: true,
          });
        }else if(data.status==500) {
          loadbooking.hide()
          Swal.fire({
            title: data.title,
            text:  data.message,
            icon: "error",
            showCancelButton: false,
            showConfirmButton:false,
            showCloseButton: true,
          });
        }else{
          loadbooking.hide()
          fromBooking.reset()
          Swal.fire({
            title: data,
            text: null,
            icon: "error",
            showCancelButton: false,
            showConfirmButton: true,
            confirmButtonText: 'Update',
            showCloseButton: true,
            confirmButtonColor: '#000', // Cambia esto al color que desees
            customClass: {
              confirmButton: ' btn-sm rounded-0 shadow-0' // Agrega aquí la clase personalizada que quieras
            }
          }).then((result) => {
            if (result.isConfirmed) {
              location.reload(); // Esto recarga la página
            }
          });
        }        
    })
    .catch(error => {
      loadbooking.hide()
        console.error( error);  
        Swal.fire({
            title: 'Error',
            text: 'An unexpected error occurred. Please try again later.',
            icon: 'error',
        });
    });
   })
}

// ***

const rates = document.querySelectorAll(".item_menu");
rates.forEach((navtitile) => {
  navtitile.addEventListener("click", () => {
      if (navtitile.classList.contains("active")) {
        navtitile.classList.remove("active");
      } else {
      const accordionTitlesWithIsOpen = document.querySelectorAll(".active");
      accordionTitlesWithIsOpen.forEach((accordionTitleWithIsOpen) => {
          accordionTitleWithIsOpen.classList.remove("active");
      });
      navtitile.classList.add("active");
      }
  });
});

const btnmenu = document.querySelector('.btn_menu');
const cont_menu = document.querySelector('.content_menu header');
btnmenu.addEventListener("click", function() {
  cont_menu.classList.add('active')
});

document.addEventListener("DOMContentLoaded", function () {
  var tablinks = document.querySelectorAll('.tablinks');
  
  tablinks.forEach(function(tablink) {
      tablink.addEventListener('click', function(event) {
      openCity(event);
      });
  });

  if (tablinks.length > 0) {
      var firstTabLink = tablinks[0];
      firstTabLink.click();
  }
  
  function openCity(event) {
      var cityName = event.currentTarget.getAttribute('data-city');
      var tabcontent = document.querySelectorAll('.tabcontent');

      tabcontent.forEach(function(content) {
      content.style.display = 'none';
      });

      tablinks.forEach(function(tablink) {
      tablink.classList.remove('active');
      });

      document.getElementById(cityName).style.display = 'flex';

      event.currentTarget.classList.add('active');
  }
});
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
  spaceBetween: 15,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    350: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});

import { Mandarin } from "flatpickr/dist/l10n/zh.js";

const input = document.getElementById("datebooking");
let dateFromPHP = "today"
if(input){dateFromPHP = input.dataset.date;}

flatpickr("#datebooking", {
    dateFormat: "d-m-Y",     
    defaultDate: dateFromPHP?dateFromPHP:"today"
});


flatpickr("#datebookingZh", {
  dateFormat: "d-M-Y",
  minDate: "today",
  defaultDate: "today",
  locale: Mandarin
});

document.querySelectorAll(".datebirthdayZh").forEach(input => {
    flatpickr(input, {
      dateFormat: "d-M-Y",
      defaultDate: "today",
      minDate: "today",
      locale: Mandarin
    });
});

document.querySelectorAll(".datebirthday").forEach(input => {
    flatpickr(input, {
      dateFormat: "d-M-Y",
      defaultDate: dateFromPHP?dateFromPHP:"today",
      minDate: "today",
      //locale: Mandarin
    });
});

document.querySelectorAll(".datebirthdayZh2").forEach(input => {
  flatpickr(input, {
    dateFormat: "d-M-Y",
    locale: Mandarin
  });
});

document.querySelectorAll(".datebirthday2").forEach(input => {
  flatpickr(input, {
    dateFormat: "d-M-Y",
    //locale: Mandarin
  });
});

// Agregar active a accordion para menus de categorias de diseño mobile o navegation de un tour
const accordionActive = ()=>{
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      
      panel.classList.toggle("active");
    });
  }
}
accordionActive();

const destinationsItems = document.querySelectorAll('.item_ui[data-target="destinations"]');
const btnCerrarDestinations = document.querySelector('#destinations .cerrar_ui');
const modalDestinations = document.getElementById('destinations');

const searchItems = document.querySelectorAll('.item_ui[data-target="search"]');
const btnCerrarSearch = document.querySelector('#search .cerrar_ui');
const modalSearch = document.getElementById('search');

const moreItems = document.querySelectorAll('.item_ui[data-target="more"]');
const btnCerrarMore = document.querySelector('#more .cerrar_ui');
const modalMore = document.getElementById('more');

const packagesItems = document.querySelectorAll('.item_ui[data-target="packages"]');
const btnCerrarPackages = document.querySelector('#packages .cerrar_ui');
const modalPackages = document.getElementById('packages');

function toggleActive(item, modal) {
    destinationsItems.forEach(function (destItem) {
        destItem.classList.remove('active');
    });
    searchItems.forEach(function (searchItem) {
        searchItem.classList.remove('active');
    });

    item.classList.add('active');
    modal.classList.add('active');
}

destinationsItems.forEach(function (item) {
    item.addEventListener('click', function () {
        toggleActive(item, modalDestinations);
    });
});

btnCerrarDestinations.addEventListener('click', function () {
    modalDestinations.classList.remove('active');
    destinationsItems.forEach(function (item) {
        item.classList.remove('active');
    });
});

searchItems.forEach(function (item) {
    item.addEventListener('click', function () {
        toggleActive(item, modalSearch);
    });
});

moreItems.forEach(function (item) {
    item.addEventListener('click', function () {
        toggleActive(item, modalMore);
    });
});

packagesItems.forEach(function (item) {
    item.addEventListener('click', function () {
        toggleActive(item, modalPackages);
    });
});

btnCerrarSearch.addEventListener('click', function () {
    modalSearch.classList.remove('active');
    searchItems.forEach(function (item) {
        item.classList.remove('active');
    });
});

btnCerrarMore.addEventListener('click', function () {
    modalMore.classList.remove('active');
    moreItems.forEach(function (item) {
        item.classList.remove('active');
    });
});

btnCerrarPackages.addEventListener('click', function () {
    modalPackages.classList.remove('active');
    packagesItems.forEach(function (item) {
        item.classList.remove('active');
    });
});

window.onscroll = function() {
  myFunction();
};

var navbar = document.getElementById("navsingle");
var sticky = navbar ? navbar.offsetTop : 0;
var additionalOffset = 300;

function myFunction() {
  if (navbar) {
    if (window.pageYOffset >= sticky + additionalOffset) {
        navbar.classList.add("active");
    } else {
        navbar.classList.remove("active");
    }
  }
}

//selecionar botones y formulario
let buttomAddTraveler = document.querySelector("#add-traveler");
let itemTraveler = document.querySelector("#item-travellers-card-0");
let wrapperTraveler = document.querySelector("#wrapper-travellers-cards");

//variables
let arrayForms = [itemTraveler];
let valorItemsTraveler = 1;

// colocar un id a cada campo de un form
const idFormFields = (form,id)=>{
    let inputClone = form.querySelectorAll("input");
    inputClone.forEach(item=>{
        item.setAttribute("name",item.getAttribute("base-name")+id);
        if(item.getAttribute("base-name")==="travellers-name-") item.value = null;
        if(item.getAttribute("base-name")==="travellers-email-") item.value = null; 
        if(item.getAttribute("base-name")==="travellers-country-") item.value = null; 
        if(item.getAttribute("base-name")==="travellers-doc-") item.value = null; 
        if(item.getAttribute("base-name")==="travellers-birth-") item.value = null; 
    });
}
//actualizar valores
const updateFormsField = (arrayForm=[])=>{
    arrayForms.forEach((form,index)=>{
        idFormFields(form,index); // actualizar inputs
        form.id = form.getAttribute("id-base") + (index); // actualizar nuevo id al form
        let titleForm = form.querySelector("#title-traveller"); // actualizar titulo del form
        titleForm.textContent = "PASSENGER " + (index+1);
        // Id del buttom close y cerrar
        let buttonClose = form.querySelector(".buttonFormSearch");
        buttonClose.setAttribute("id-form",(index));
        buttonClose.id = buttonClose.getAttribute("id-base") + (index);
    });
}
// eliminar un form
const deleteForm = (id) => {
    let form = document.querySelector("#item-travellers-card-"+id);
    if(form && arrayForms.length>1) {
        form.remove();
        arrayForms.splice(id,1);
        valorItemsTraveler--;
        updateFormsField(arrayForms);
    }
}
//agregar formularios
if(buttomAddTraveler){
  buttomAddTraveler.addEventListener("click",()=>{ 
      // clone form y agregar Id
      let auxClone = itemTraveler.cloneNode(true);
      auxClone.id = auxClone.getAttribute("id-base") + valorItemsTraveler;
      // Id del buttom close y cerrar
      let buttonClose = auxClone.querySelector(".buttonFormSearch");
      buttonClose.setAttribute("id-form",valorItemsTraveler);
      buttonClose.id = buttonClose.getAttribute("id-base") + valorItemsTraveler;
      buttonClose.addEventListener("click",()=>{
          deleteForm(buttonClose.getAttribute("id-form"));
      })
      //Id de los campos agregados
      idFormFields(auxClone,valorItemsTraveler);
      //titulo del form
      let titleForm = auxClone.querySelector("#title-traveller");
      titleForm.textContent = "PASSENGER " + (valorItemsTraveler+1);
      arrayForms.push(auxClone);
      wrapperTraveler.appendChild(auxClone);
      valorItemsTraveler++;
      flatpickr(".datebirthday2", {
        dateFormat: "d-M-Y",
      });
      flatpickr(".datebirthdayZh2", {
        dateFormat: "d-M-Y",
        locale: Mandarin
      });
  });
}

let buttonItemTour = document.querySelectorAll(".openmodal-item-tour");
let formItemTour = document.querySelector("#fromInquire");

if(buttonItemTour){
  buttonItemTour.forEach(item=>{
    item.addEventListener("click",()=>{
      formItemTour.querySelector('input[name="tour"]').value = item.getAttribute("title-tour")
    })
  });
}

var swiper = new Swiper(".mySwiperHome", {
  slidesPerView: 1,
  loop: true,
  speed: 2000,
  autoplay: {
    delay: 6000, 
    disableOnInteraction: false
  },
  effect: "fade", 
  fadeEffect: {
    crossFade: true 
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

let $buttonTabReviews = document.getElementById("pills-google-tab");
if($buttonTabReviews){
  $buttonTabReviews.addEventListener("click",()=>{
    var swiper = new Swiper(".sliderReviews", {
      allowTouchMove: false, 
      simulateTouch: false,  
      loop: true,
      speed: 1500,
      autoplay: {
        delay: 6000, 
        disableOnInteraction: false
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });
}

let $overviewItinerary = document.querySelector(".content-read");
let $fadeOverview = document.getElementById("fade-itinerary");
let $moreOverview = document.getElementById("more-itinerary");
let $lessOverview = document.getElementById("less-itinerary");

if($moreOverview){
  $moreOverview.addEventListener('click',()=>{
    $fadeOverview.classList.toggle("active");
    $moreOverview.classList.toggle("active");
    $lessOverview.classList.toggle("active");
    $overviewItinerary.style.maxHeight = `${$overviewItinerary.scrollHeight}px`;
  });

  $lessOverview.addEventListener('click',()=>{
    $fadeOverview.classList.toggle("active");
    $moreOverview.classList.toggle("active");
    $lessOverview.classList.toggle("active");
    $overviewItinerary.style.maxHeight = `300px`;
  });
}

document.addEventListener("DOMContentLoaded", function() {
  // sticky book ###
  var ur = document.getElementById("stickycontent");
  var stickyElement = document.querySelector(".sticky");

  // sticky menu ###
  const $wrapperItinerario = document.getElementById("wrapper-menu-title-tour");
  const $menuTitles = document.getElementById("menu-title-tour");
  if($menuTitles){
    const languageMenu = $menuTitles.getAttribute("lang");
    const $titlesTourPage = $wrapperItinerario.querySelectorAll("h2");

    let arrayMenuLang = [];
    if(languageMenu==="en") arrayMenuLang = ['<i class="bi bi-map"></i> Itinerary','<i class="bi bi-card-checklist"></i> Includes / Not Include','<i class="bi bi-bookmark-star"></i> What to bring?','<i class="bi bi-list-nested"></i> FAQs'];
    if(languageMenu==="es") arrayMenuLang = ['<i class="bi bi-map"></i> Itinerario','<i class="bi bi-card-checklist"></i> Incluye / No incluye','<i class="bi bi-bookmark-star"></i> ¿Qué llevar?','<i class="bi bi-list-nested"></i> FAQs'];
    if(languageMenu==="zn") arrayMenuLang = ['<i class="bi bi-map"></i> 行程详情 行程','<i class="bi bi-card-checklist"></i> 包含项目 / 不包含内容','<i class="bi bi-bookmark-star"></i> 要带什么？','<i class="bi bi-list-nested"></i> 常问问题'];

    const removeClass = (clase,arreglo)=>{
        arreglo.forEach(e=>e.classList.remove(clase));
    }

    // sticky book ###

    window.addEventListener("scroll", function() {
        if (ur && stickyElement) {
            if ($wrapperItinerario.getBoundingClientRect().top<0 && ($wrapperItinerario.getBoundingClientRect().top>-1*$wrapperItinerario.scrollHeight)) { // Si el top del elemento 'ur' está a -200px o menos
                stickyElement.classList.add("isActive");
            } else {
                stickyElement.classList.remove("isActive");
            }
        }
    });

    $menuTitles.appendChild( document.createElement('ul'));
    if($titlesTourPage){
        let $fragmentAux = document.createDocumentFragment();
        $titlesTourPage.forEach((itemTitle,index)=>{
            let $aux = document.createElement('li');
            $aux.setAttribute("onclick","scrollToCenter(this)")
            $aux.innerHTML = arrayMenuLang[index];
            $fragmentAux.appendChild($aux);
            $aux.addEventListener('click',()=>{
                itemTitle.scrollIntoView({behavior:"smooth"});
            })
        });

        $menuTitles.children[0].appendChild($fragmentAux);
    }

    if(window.innerWidth <= 991){
      stickyElement.style.top = `${$menuTitles.scrollHeight}px`;
    }

    const $itemsMenuTitle = $menuTitles.querySelectorAll("li");
    $itemsMenuTitle[0].classList.add("active")


    $itemsMenuTitle.forEach(item=>{
      let aux = item.getBoundingClientRect().left - (window.innerWidth - item.scrollWidth)/2;
      item.addEventListener("click",()=>{
        item.parentElement.scrollTo({ left: aux, behavior: "smooth" });
      })
    });


    document.addEventListener('scroll',()=>{
        $titlesTourPage.forEach((e,index)=>{
            if(e.getBoundingClientRect().top-120 <= 0){
                removeClass("active",$itemsMenuTitle);
                $itemsMenuTitle[index].classList.add("active");
            }
        });
    });
  }


  //
  //
  //Funcionalidades para el template de un tour - New tours 2025
  //
  //

  const $navigationTour = document.getElementById("navigation-tour");
  const $navigationTitle = document.getElementById("navigation-title");
  const $navigationEnd = document.getElementById("navigation-end");
  const $navigationShows = document.querySelectorAll(".navigation-tour__show");

  const $destinationCopy = document.getElementById("copy-destination-header");
  const $destinationPaste = document.getElementById("paste-destination-header");
  const $linksCopy = document.getElementById("copy-links-header");
  const $linksPaste = document.getElementById("paste-links-header");

  if(document.getElementById("btn-mnav-tour")){
    document.getElementById("btn-mnav-tour").addEventListener('click', () => {
        if ($destinationCopy && window.innerWidth > 991) {
            const cloneDest = $destinationCopy.cloneNode(true);
            $destinationPaste.replaceChildren(cloneDest);
            accordionActive();
        }

        if ($linksCopy && window.innerWidth > 991) {
            const cloneLinks = $linksCopy.cloneNode(true);
            $linksPaste.replaceChildren(cloneLinks);
        }
    });
  }


  const addActiveShow = ()=> $navigationShows.forEach(el=>el.classList.add("show"))
  const removeActiveShow = ()=> $navigationShows.forEach(el=>el.classList.remove("show"))
  
  document.addEventListener('scroll',(e)=>{
      if(!$navigationEnd) return
      let end = -1
      end = $navigationEnd.getBoundingClientRect().top;
      if($navigationTour.getBoundingClientRect().top <= 0 && end >= 0) {
          $navigationTour.classList.add("active")
          $navigationTitle.classList.add("active")
          addActiveShow()
      }
      else {
          $navigationTour.classList.remove("active")
          $navigationTitle.classList.remove("active")
          removeActiveShow()
      }
  })
  
  const $itemsNavigation = document.querySelectorAll("#items-navigation-tour > div");
  const $sectionNavigation = document.querySelectorAll("section[data-section]");
  $itemsNavigation.forEach((el,index)=>{
      el.addEventListener('click',(e)=>{
          window.scrollTo({
              top: $sectionNavigation[index].getBoundingClientRect().top + window.scrollY - 60,
              behavior: "smooth",
          });
      })
  })

  const intersectionCallback = (entries) => {
      entries.forEach((entry) => {
          let index = [...$sectionNavigation].indexOf(entry.target)
          if (entry.isIntersecting) {
              $itemsNavigation[index].classList.add("active")
          }
          else{
              $itemsNavigation[index].classList.remove("active")
          }
      });
  };
  
  const observer = new IntersectionObserver(intersectionCallback, {threshold: .2,});
  $sectionNavigation.forEach(section=>observer.observe(section));


  const $buttonScrollTop = document.getElementById("scroll-top-page")
  $buttonScrollTop.addEventListener('click',()=>{
      window.scrollTo({
          top,
          behavior: "smooth",
      })
  })



  const $scrollTextTour = document.querySelectorAll("[data-scrollText]");
  const $buttonScrollTextTour = document.querySelectorAll("[data-scrollButton]");

  $scrollTextTour.forEach((text,index)=>{
      if(parseInt(text.dataset.scrollheight,10) >= text.scrollHeight) {
          $buttonScrollTextTour[index].style.display = "none"
          text.classList.add("active")
      }
  })

  if($scrollTextTour && $buttonScrollTextTour){
      $scrollTextTour.forEach((text,index)=>{
          if(!(text.dataset.scrollText == $buttonScrollTextTour[index].dataset.scrollButton)) return
          $buttonScrollTextTour[index].addEventListener('click',e=>{
              if(!text.classList.contains("active")){
                  text.style.maxHeight = `${text.scrollHeight}px`
                  text.classList.add("active");
                  text.scrollIntoView({
                      behavior: "smooth",
                      block: "start"
                  });
                  $buttonScrollTextTour[index].classList.add("active");
              }
              else{
                  text.style.maxHeight = `${parseInt(text.dataset.scrollheight,10)}px`
                  text.classList.remove("active");
                  text.scrollIntoView({
                      behavior: "smooth",
                      block: "start"
                  }); 
                  $buttonScrollTextTour[index].classList.remove("active");
              }
          })
      });
  }


  //
  // Table Content de los blogs
  //

  const $tableContentBlogs = document.getElementById("contentTitlesBlog");
  const $titlesBlogs = document.querySelectorAll("#text-blog h2,#text-blog h3");

  const $fragmentTitle = document.createDocumentFragment();
  if($tableContentBlogs){

    $titlesBlogs.forEach(title => {
        const $li = document.createElement("li");
        $li.style.padding = "4px 0px";
        if(title.nodeName === "H2"){
          $li.textContent = title.textContent;
          $li.style.fontWeight = "600";
        }
        else{
          $li.innerHTML = `<i class="bi bi-arrow-return-right text-primary"></i> ${title.textContent}`;
          $li.style.listStyleType = "none";
        }

        $li.addEventListener('click',()=>{
            title.scrollIntoView({
                behavior: "smooth",
            })
        })

        $fragmentTitle.appendChild($li)
    });

    $tableContentBlogs.appendChild($fragmentTitle)
  }

});

