
import {Spinner } from './loandig'
import Swal from 'sweetalert2'
import {Tab} from 'bootstrap'
import Swiper from 'swiper/bundle';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css/bundle';
// swiper
var swiper = new Swiper(".sliderReviews", {
  modules: [Navigation, Pagination],
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swipermain = new Swiper(".mySwiper1", {
  modules: [Navigation, Pagination],
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
    peardata.append('dateStart',fromBooking.dateStart.value);    
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