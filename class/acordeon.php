<?php

class ClassAccordion
{
    protected $tabsDivs;

    public function __construct($tabsDivs = '')
    {
        $this->tabsDivs = $tabsDivs;
        add_shortcode('acordeons', array($this, 'renderAccordionGroup'));
        add_shortcode('acordeon', array($this, 'renderAccordion'));
    }

    public function renderAccordionGroup($args, $content = null)
    {
        return '<div class="accordion-group check px-1 px-md-2 px-lg-3 check">' . do_shortcode($content) . $this->tabsDivs . '</div>';
    }

    public function renderAccordion($args, $content = null)
    {
            $defaults = array(
                'id' => 'id' . rand(100, 999),
                'active' => '',
                'title' => '',
                'tittle_tag' => 'h3',
                'class' => '',
            );

            $args = shortcode_atts($defaults, $args);
            extract($args);

            $this->tabsDivs .= '
                <button class="accordion ' . $class . '">
                    <' . $tittle_tag . '>' . $title . '</' . $tittle_tag . '>
                </button>
                <div class="panel ' . $class . '">
                    ' . $content . '
                </div>';

            // You were missing updating $output with the generated content
            $output = ''; 

            return $output;
        }
}

new ClassAccordion();
class ClassAccordionFaqs
{
    protected $tabsDivs;

    public function __construct($tabsDivs = '')
    {
        $this->tabsDivs = $tabsDivs;
        add_shortcode('faqs', array($this, 'FaqGroup'));
        add_shortcode('faq', array($this, 'faq'));
    }

    public function FaqGroup($args, $content = null)
    {
        return '<div class="accordion-group px-1 px-md-2 px-lg-3">' . do_shortcode($content) . $this->tabsDivs . '</div>';
    }

    public function faq($args, $content = null)
    {
        $defaults = array(
            'id' => 'id' . rand(100, 999),
            'active' => '',
            'title' => '',
            'tittle_tag' => 'h3',
        );

        $args = shortcode_atts($defaults, $args);
        extract($args);

        $this->tabsDivs .= '
            <button class="accordion">
                <' . $tittle_tag . '>' . $title . '</' . $tittle_tag . '>
            </button>
            <div class="panel">
                ' . $content . '
            </div>';

        // You were missing updating $output with the generated content
        $output = ''; 

        return $output;
    }
}

new ClassAccordionFaqs();