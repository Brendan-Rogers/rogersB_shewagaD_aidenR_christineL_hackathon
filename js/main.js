

var target = document.querySelectorAll('.scroll');
function parallax(){
   //document.getElementsByClassName('transition');
//target.style.color = '#efefef';

//var scrolled = window.pageYOffset;
//var rate = scrolled * 0.3;

//target.style.transform = 'translate3d(0px, '+rate+'px , 0px)' ; //rate is determined by the amount scrolled

  
if( index = 0 ) {
    length = target.length;
} 

for(index; index < length; index ++) { //incramenting lenght
    var position = window.pageYOffset * target [index].dataset.rate;
    
  target[index].style.transform = 'translate3d(0px, '+position+'px , 0px)' ;


}

function colorChange(){

}

};


window.addEventListener("scroll" , parallax);




// components will go here
import homeComponent from './components/homeComponent.js'; // this is like doing a php include 
import signupComponent from './components/signupComponent.js';   

const routes = [
    { path: '/', redirect: { name: "home"} },
    { path: "/home", name: "home", component: homeComponent },
    { path: "/signup", name: "signup", component: signupComponent }
];

const router = new VueRouter({

    routes

});

const vm = new Vue({

    router: router
    
}).$mount("#app");


