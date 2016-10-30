<?php

/**
 * Created by PhpStorm.
 * User: naux
 * Date: 16/8/29
 * Time: 下午1:10
 */
class L629 extends CI_Controller
{
    public function index()
    {
        $this->load->helper('array');
        $a1 = array(
            'size'=>'38',
            'color' => 'red',
            'shape' => 'round',
            'radius' => '10',
            'diameter' => '20',
            'level'=>''
        );

        echo element('shape',$a1);
        var_dump($a1);
       // echo element('level',$a1,'senior');
        $my_shape = elements(array('color', 'shape', 'level'), $a1,'jimmy');
        var_dump($my_shape);
    }

    public function radom()
    {
        $this->load->helper('array');
        $quotes = array(
            "I find that the harder I work, the more luck I seem to have. - Thomas Jefferson",
            "Don't stay in bed, unless you can make money in bed. - George Burns",
            "We didn't lose the game; we just ran out of time. - Vince Lombardi",
            "If everything seems under control, you're not going fast enough. - Mario Andretti",
            "Reality is merely an illusion, albeit a very persistent one. - Albert Einstein",
            "Chance favors the prepared mind - Louis Pasteur"
        );

        echo random_element($quotes);
    }

    public function code()
    {
        $this->load->helper('captcha');
        $vals = array(
            'word'      => 'Random word',
            'img_path'  => './application/uploads/',
            'img_url'   => 'http://localhost:7175/citest/l629/index.php',
            'font_path' => './system/fonts/texb.ttf',
            'img_width' => '150',
            'img_height'    => 30,
            'expiration'    => 3600,
            'word_length'   => 8,
            'font_size' => 16,
            'img_id'    => 'Imageid',
            'pool'      => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

            // White background and border, black text and red grid
            'colors'    => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
        );

        $cap = create_captcha($vals);
        echo $cap['image'];

    }

    public function time(){
        $this->load->helper('date');
        echo now('Australia/Victoria');

        echo"<br>";

        $datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
        $time = time();
        echo mdate($datestring, $time);

        echo "<br>";
        echo days_in_month(06, 2015);
    }


}