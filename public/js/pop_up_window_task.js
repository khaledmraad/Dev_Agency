// function change() {
//     var div = document.getElementById("send_not");
//     if (div.style.display === "none") {
//       div.style.display = "block";
//     } else {
//       div.style.display = "none";
//     }
//   }

  $(document).ready(function(){
 
    /* define variables for popup */
    /*----------------------------*/
    var fadeInTime = 600; //time in ms
    var fadeOutTime = 600; //time in ms
    var popupWindow = $('#send_cont_task'); //jquery selector of window
  
    /* define simple fade functions */
    /*------------------------------*/  
  
    function fadein(el) {
      $(el).fadeIn(fadeInTime);
    }
    function fadeout(el) {
      $(el).fadeOut(fadeOutTime);
    }
   
    /* open #popup-window on click of .popup-trigger */
    /*-----------------------------------------------*/
   
    $('.send_btn_task').on('click touchend', function(){
      fadein(popupWindow);
    })
    
    /* close #popup-window on click of .popup-close */
    /*----------------------------------------------*/
    
    $('.popup-close').on('click touchend', function() {

      fadeout(popupWindow);
    });
   
    /* close #popup-window on click a anywhere outside the window	*/
    /*------------------------------------------------------------*/
    $(document).on('mouseup', function(e) {
        if (!popupWindow.is(e.target) // target not container...
            && popupWindow.has(e.target).length === 0) // ... nor descendant of container
        {
        fadeout(popupWindow);
        }
    });
  
    /* close #popup-window on pressing ESC	*/
    /*------------------------------------------------------------*/
    $(document).on('keyup', function(e) {
        if (e.keyCode == 27) { // (escape key)
        fadeout(popupWindow);
        }
    });
  
  })