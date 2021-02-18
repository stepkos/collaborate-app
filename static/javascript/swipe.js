



class Carousel{

    constructor(){

      this.cardsList = document.getElementsByClassName('project-card-find')
      
      this.topCard = document.getElementsByClassName('project-card-find')[document.getElementsByClassName('project-card-find').length - 1]
      this.bindPan();

    }

    bindPan(){

      
      this.topCard = this.cardsList[this.cardsList.length-1]
      
      if (this.cardsList.length > 0) {
        // listen for pan gesture on top card
        this.hammer = new Hammer(this.topCard);
        this.hammer.add(
          new Hammer.Pan({
            position: Hammer.position_ALL,
            threshold: 0
          })
        );

        // pass event data to custom callback
        this.hammer.on("pan", (e)=>{this.onPan(e, this.topCard)});
        this.hammer.on("panend", (e)=>{this.onPanEnd(e, this.topCard)});
      }

    }


    onPan(e, topCard){
      
      // remove transition property
      topCard.style.transition = null

      // get starting coordinates
      let style = window.getComputedStyle(topCard)
      let mx = style.transform.match(/^matrix\((.+)\)$/)
      let startPosX = mx ? parseFloat(mx[1].split(', ')[4]) : 0
      let startPosY = mx ? parseFloat(mx[1].split(', ')[5]) : 0

      let bounds = topCard.getBoundingClientRect()
      
      let isDraggingFrom = (e.center.y - bounds.top) > topCard.clientHeight / 2 ? -1 : 1

      // calculate new coordinates
      let posX = e.deltaX  + startPosX 
      let posY = e.deltaY + startPosY 


      let propX = e.deltaX / topCard.clientWidth

      // get swipe direction, left (-1) or right (1)
      let dirX = e.deltaX < 0 ? -1 : 1

      // get degrees of rotation (between 0 and +/- 45)
      let deg = isDraggingFrom * dirX * Math.abs(propX) * 45

        // move card
        topCard.style.transform =
          'translateX(' + posX + 'px) translateY(' + posY + 'px) rotate(' + deg + 'deg)'

    }


    onPanEnd(e, cardsList, topCard){

     

      let element = topCard = document.getElementsByClassName('project-card-find')[document.getElementsByClassName('project-card-find').length - 1]
      let style = window.getComputedStyle(element)
      let mx = style.transform.match(/^matrix\((.+)\)$/)
      let startPosX = mx ? parseFloat(mx[1].split(', ')[4]) : 0
    
      let propX = e.deltaX / topCard.clientWidth
    
      // get swipe direction, left (-1) or right (1)
      let dirX = e.deltaX < 0 ? -1 : 1
      
    
    
      //swipe zaakceptowany
      if(Math.abs(startPosX) > 1000 ){
    
    
        (dirX == -1) ? $('#swipe-information').css('background-color', 'rgb(255, 100, 100)') : $('#swipe-information').css('background-color', 'rgb(130, 253, 130)');
        (dirX == -1) ? $('#swipe-information span').css('transform', 'rotate(180deg)') :  $('#swipe-information span').css('transform', 'rotate(0deg)')
    
        $('#swipe-information').animate({
          'opacity' : '1'
        },500, ()=>{
          setTimeout(() =>{
            $('#swipe-information').animate({
              'opacity' : '0'
            },500)
          }, 500)
         
        })
    
    
        fetch('homeView.php', {
          method : 'POST',
          mode: "same-origin",
          credentials: "same-origin",
          headers :{
            'Content-Type' : 'application/json'
          },
          body : JSON.stringify({
            id_offert : topCard.id
          })
        })
    
        
        this.cardsList[this.cardsList.length-1].remove();
        this.bindPan()

      }
      else{
        // set back transition property
        topCard.style.transition = 'transform 200ms ease-out'
    
        // reset card position
        topCard.style.transform = 'translateX(-50%) translateY(-50%)'
      }
    }
}





var carousel = new Carousel()


/*var mc = new Hammer(myElement);
const onPan = (e, card) =>{


      // remove transition property
      myElement.style.transition = null

      // get starting coordinates
      let style = window.getComputedStyle(myElement)
      let mx = style.transform.match(/^matrix\((.+)\)$/)
      let startPosX = mx ? parseFloat(mx[1].split(', ')[4]) : 0
      let startPosY = mx ? parseFloat(mx[1].split(', ')[5]) : 0

      let bounds = myElement.getBoundingClientRect()

      isDraggingFrom =
      (e.center.y - bounds.top) > myElement.clientHeight / 2 ? -1 : 1

    // calculate new coordinates
    let posX = e.deltaX + startPosX
    let posY = e.deltaY + startPosY


    let propX = e.deltaX / myElement.clientWidth

  // get swipe direction, left (-1) or right (1)
  let dirX = e.deltaX < 0 ? -1 : 1

  // get degrees of rotation (between 0 and +/- 45)
  let deg = isDraggingFrom * dirX * Math.abs(propX) * 45

    // move card
    myElement.style.transform =
      'translateX(' + posX + 'px) translateY(' + posY + 'px) rotate(' + deg + 'deg)'
}



mc.on("pan", (e)=>{





      // remove transition property
      myElement.style.transition = null

      // get starting coordinates
      let style = window.getComputedStyle(myElement)
      let mx = style.transform.match(/^matrix\((.+)\)$/)
      let startPosX = mx ? parseFloat(mx[1].split(', ')[4]) : 0
      let startPosY = mx ? parseFloat(mx[1].split(', ')[5]) : 0

      let bounds = myElement.getBoundingClientRect()

      isDraggingFrom =
      (e.center.y - bounds.top) > myElement.clientHeight / 2 ? -1 : 1

    // calculate new coordinates
    let posX = e.deltaX + startPosX
    let posY = e.deltaY + startPosY


    let propX = e.deltaX / myElement.clientWidth

  // get swipe direction, left (-1) or right (1)
  let dirX = e.deltaX < 0 ? -1 : 1

  // get degrees of rotation (between 0 and +/- 45)
  let deg = isDraggingFrom * dirX * Math.abs(propX) * 45

    // move card
    myElement.style.transform =
      'translateX(' + posX + 'px) translateY(' + posY + 'px) rotate(' + deg + 'deg)'
    
})

mc.on("panend", (e)=>{

  let style = window.getComputedStyle(myElement)
  let mx = style.transform.match(/^matrix\((.+)\)$/)
  let startPosX = mx ? parseFloat(mx[1].split(', ')[4]) : 0

  propX = e.deltaX / myElement.clientWidth

  // get swipe direction, left (-1) or right (1)
   dirX = e.deltaX < 0 ? -1 : 1
  


  //swipe zaakceptowany
  if(Math.abs(startPosX) > 1000 ){


    (dirX == -1) ? $('#swipe-information').css('background-color', 'rgb(255, 100, 100)') : $('#swipe-information').css('background-color', 'rgb(130, 253, 130)');
    (dirX == -1) ? $('#swipe-information span').css('transform', 'rotate(180deg)') :  $('#swipe-information span').css('transform', 'rotate(0deg)')

    $('#swipe-information').animate({
      'opacity' : '1'
    },500, ()=>{
      setTimeout(() =>{
        $('#swipe-information').animate({
          'opacity' : '0'
        },500)
      }, 500)
     
    })


    fetch('homeView.php', {
      method : 'POST',
      mode: "same-origin",
      credentials: "same-origin",
      headers :{
        'Content-Type' : 'application/json'
      },
      body : JSON.stringify({
        id_offert : myElement.id
      })
    })


    
  }
  else{
    // set back transition property
    myElement.style.transition = 'transform 200ms ease-out'

    // reset card position
    myElement.style.transform = 'translateX(-50%) translateY(-50%)'
  }


  
})*/