/*

Glide.js Stuff

*/
const slider1=document.getElementById("glide_1");



/*

Main Area STUFF

*/

if(slider1){
    new Glide(slider1,{
        type:"carousel",
        stratAt: 0,
        autoplay: 3000,
        hoverpause:true,
        perView: 1,
        animationDuration:800,
        animationTimingFunc:"linear",
    }).mount();
}