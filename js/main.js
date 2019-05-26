
$( document ).ready(function() 
{
    new Flickity(".main-carousel",
    {
        wrapAround: true,
        cellSelector: ".carousel-cell",
        cellAlign: 'left',
        contain: true,
        prevNextButtons: false,
        autoPlay: 3000
    });

  
})