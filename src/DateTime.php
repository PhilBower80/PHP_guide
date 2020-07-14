<?php  

// Not sure this is a valid way of writing class/fconstructor function.
//  is DateTime object already considered a class?
// maybe a constructor is not required

// class DateTime 
// {
//   function __construct($date) {
//     $this->date = new DateTime();
//     $date = new DateTime();
//   }
// }

class DateTime 
{
    function getDateTime() {
        $date = new DateTime();
        return $date;
    }
}

