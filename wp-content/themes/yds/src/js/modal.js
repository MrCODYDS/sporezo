/*
 * Show modal & close modal functions
 */

// Toggle hidden class for modal
const toggleModal = () => {
  document.querySelector('.modal')
    .classList.toggle('modal--hidden');
    hideAllFormParts();
    document.querySelector('.form-choices').classList.remove('form-part--hidden');
};

// Get all buttons with class show-modal & add function on click
const buttonsModal = document.querySelectorAll('.show-modal');
buttonsModal.forEach(function(button, index) {
    button.addEventListener('click', toggleModal);
});

// Make sure that submit button does nothing
document.querySelector('#reservation-form')
  .addEventListener('submit', (event) => {
    toggleModal();
  })

// Close modal when clicked on cross
document.querySelector('.modal__header span')
  .addEventListener('click', toggleModal);



/*
 * Show current modal & hide other modals functions
 */

function showNext(button) {
  hideAllFormParts();

  fillInEndScreen();

  // Get data value
  const data = button.dataset.next;

  // Remove hidden class on screen with current data value
  document.querySelector('.' + data).classList.remove('form-part--hidden');
}

// Get all buttons with class btn-next & add function on click
const buttonsNext = document.querySelectorAll('.btn-next');
buttonsNext.forEach(function(button, index) {
    button.addEventListener('click', function(){
      showNext(this);
  });
});

function showPrevious(button) {
  hideAllFormParts();

  // Get data value
  const data = button.dataset.previous;

  // Remove hidden class on screen with current data value
  document.querySelector('.' + data).classList.remove('form-part--hidden');
}

// Get all buttons with class btn-previous & add function on click
const buttonsPrevious = document.querySelectorAll('.btn-previous');
buttonsPrevious.forEach(function(button, index) {
    button.addEventListener('click', function(){
      showPrevious(this);
  });
});

function hideAllFormParts() {
  // Get all elements with class form-part & add hidden class
  const formParts = document.querySelectorAll('.form-part');
  formParts.forEach(function(part, index) {
    part.classList.add('form-part--hidden');
  });
}

function fillInEndScreen() {
  jQuery(document).ready(function ($) {
    // Fill in selected choice
    var choiceValue = $("input[name='radioChoices']:checked").val();
    $('#final-choice').val(choiceValue);

    // Fill in selected time
    /*var selectedSession = $('select#selectTimes').children("option:selected").text();
    $('#tijd').text(selectedSession);*/

    // Fill in selected time
    var timeValue = $("input[name='radioTimeslots']:checked").val();
    $('#final-time').val(timeValue);

    // Fill in selected persons
    var peopleValue = $("input[name='radioPeople']:checked").val();
    $('#final-people').val(peopleValue);

    // Fill in selected date
    var dt = $("#datepicker").val().split('-');
  
    var dateValue = dt[2] +"-"+ dt[1] +"-"+ dt[0];
   
    $('#final-date').val(dateValue);
  });
}
var test;
jQuery(document).ready(function ($) {
  $("#datepicker").datepicker({
    dateFormat: "dd-mm-yy",
    onSelect: function(dateText, inst) { 
      test = dateText;
      console.log(test);
    }
  });
});




jQuery(document).ready(function ($) {
  $('#selectTimes').change(function() {
    // Fill in selected date
    var dt = test.split('-');
  
    var dateValue = dt[2] +"-"+ dt[1] +"-"+ dt[0];
    showUser(dateValue);
  });
});

function showUser(date) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("entreeTimeslots").innerHTML = this.responseText;
      }
  };

  xmlhttp.open("GET", "/wp-content/themes/yds/templates/includes/getFreeTimeslots.php?q="+date,true);
  xmlhttp.send();
}