    var body = document.body,
        overlaystep1 = document.querySelector('.overlay_step1'),
        overlaystep2 = document.querySelector('.overlay_step2'),
        overlaystep3 = document.querySelector('.overlay_step3'),
        overlayusp1 = document.querySelector('.overlay_usp1'),
        overlayusp2 = document.querySelector('.overlay_usp2'),
        overlayusp3 = document.querySelector('.overlay_usp3'),
        overlayusp4 = document.querySelector('.overlay_usp4'),
        overlayBtts = document.querySelectorAll('button[class$="overlay"]');
        
    [].forEach.call(overlayBtts, function(btt) {
      btt.addEventListener('click', function() { 
          var overlayOpenStep1 = this.className === 'btn btn-outline step1 open-overlay';
          var overlayOpenStep2 = this.className === 'btn btn-outline step2 open-overlay';
          var overlayOpenStep3 = this.className === 'btn btn-outline step3 open-overlay';
          var overlayOpenUSP1 = this.className === 'btn btn-outline usp1 open-overlay';
          var overlayOpenUSP2 = this.className === 'btn btn-outline usp2 open-overlay';
          var overlayOpenUSP3 = this.className === 'btn btn-outline usp3 open-overlay';
          var overlayOpenUSP4 = this.className === 'btn btn-outline usp4 open-overlay';
          
          body.classList.toggle('noscroll1', overlayOpenStep1);
          body.classList.toggle('noscroll2', overlayOpenStep2);
          body.classList.toggle('noscroll3', overlayOpenStep3);
          body.classList.toggle('noscroll4', overlayOpenUSP1);
          body.classList.toggle('noscroll5', overlayOpenUSP2);
          body.classList.toggle('noscroll6', overlayOpenUSP3);
          body.classList.toggle('noscroll7', overlayOpenUSP4);
          
          overlaystep1.setAttribute('aria-hidden', !overlayOpenStep1);
          overlaystep2.setAttribute('aria-hidden', !overlayOpenStep2);
          overlaystep3.setAttribute('aria-hidden', !overlayOpenStep3);
          overlayusp1.setAttribute('aria-hidden', !overlayOpenUSP1);
          overlayusp2.setAttribute('aria-hidden', !overlayOpenUSP2);
          overlayusp3.setAttribute('aria-hidden', !overlayOpenUSP3);
          overlayusp4.setAttribute('aria-hidden', !overlayOpenUSP4);
          
          setTimeout(function() {
              overlaystep1.scrollTop = 0;              
          }, 50)
          
      }, false);
    });