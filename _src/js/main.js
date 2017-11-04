var elite = (function() {
    var home = (function() {
        var el = {
            contactEl : document.getElementById('contact'),
            formEl : document.querySelector('form'),
            submit : document.querySelector('input.submit'),
            clear : document.querySelector('input.clear'),
            contactElHeight : document.getElementById('contact').getClientRects(),
            formElHeight : document.querySelector('form').getClientRects(),
            titles : document.getElementsByClassName('title'),
            textArea : document.querySelector('textarea')
        }

        var validateForm = function() {
            var name = false,
            email = false,
            message = false;
            if(document.getElementById('name').value.length > 1) name = true;
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 
            if(re.test(document.getElementById('email').value)) email = true;
            if(document.querySelector('textarea').value.length > 10) message = true;
            console.log(name,email, message);
            if(name && email && message) {
                return true;
            } else {
                return false;
            }
            
        }

        var showErrors = function() {
            document.querySelector('.error').className = document.querySelector('.error').className + " show";
        }

        var hideErrors = function() {
            document.querySelector('.error').className = "error";
        }

        var eL = function() {
            el.submit.addEventListener('click', function(e){
                console.log('validate =', validateForm());
                if(!validateForm()) {
                   showErrors();
                   return;
                }
                
                el.formEl.style.height = "0px";
                var request = new XMLHttpRequest();
                request.open('POST', '/php/submit.php', true);
                request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
                request.send("name="+document.getElementById('name').value+"&message="+document.querySelector('textarea').value+"&email="+document.getElementById('email').value+"&phone="+document.getElementById('phone').value);
                request.addEventListener('error', function(t,e){
                    // console.log("There was an error: ", t, e);
                })
                request.addEventListener('load', function(t,e){
                    // console.log("Successfully loaded", t, e, t.target.responseText);
                    window.setTimeout(function(){
                        // console.log(el.formElHeight[0].height+"px");
                        el.formEl.style.height = el.formElHeight[0].height+"px";
                        el.formEl.innerHTML = "<h1 style='margin-top:30px;'> Thank you for your submission! We'll be in contact soon.</h1>"
                    },1000)
                    
                })
            })
            // Functionality for "clear form" button
            el.clear.addEventListener('click', function(e){
                document.getElementById('name').value = "";
                document.getElementById('phone').value = "";
                document.getElementById('email').value = "";
                document.querySelector('textarea').value = "";
                hideErrors();
            })
            // Reset text area (pseudo placeholder)
            el.textArea.addEventListener('focus', function(e){
                el.textArea.innerHTML = "";
            })
            el.textArea.addEventListener('blur', function(e){
                
                if(!el.textArea.value.length) {
                    el.textArea.innerHTML = "Message";
                    return;
                }
               
            })

        }
        eL();
        // el.contactEl.style.height = el.contactElHeight[0].height+"px";
        // el.formEl.style.height = el.formElHeight[0].height+"px";
    })
    
    var gallery = function(){
        var el = {
            close : document.getElementById('close'),
            overlay : document.getElementById('overlay'),
            view : document.getElementsByClassName('viewable'),
            currentEl : null,
            prevEl : null,
            nextEl : null

        }
        var eL = function() {
            el.close.addEventListener('click', function(e){
                toggleClose(e);
            })
            Array.prototype.forEach.call(el.view, function(c,i,a){
                c.addEventListener('click', function(e){
                    e.preventDefault();
                    el.overlay.querySelector('.image img').src = e.target.src;
                    el.currentEl = e.target.getAttribute('data-id');
                    nav(el.currentEl);
                    // console.log(el.currentEl);
                    toggleClose();
                })
            })
            document.getElementById('previous').addEventListener('click', function(e){
                // console.log(el.prevEl);
                el.overlay.querySelector('.image img').src = el.prevEl.src;
                nav(el.prevEl.getAttribute('data-id'));
            })
            document.getElementById('next').addEventListener('click', function(e){
                // console.log(el.nextEl);
                el.overlay.querySelector('.image img').src = el.nextEl.src;
                nav(el.nextEl.getAttribute('data-id'));
            })
        }
        var nav = function(currentEl) {
            // console.log("incoming currentEl =", currentEl);
            //  console.warn("checking",document.querySelector('img[data-id="'+(el.currentEl-1)+'"]'));
            var nex = parseInt(currentEl)+1,
            pre = parseInt(currentEl)-1;

            if(document.querySelector('img[data-id="'+pre+'"]'))
            {
                document.querySelector('#previous img').className = ' ';
                var tempPre = (currentEl-1);
                el.prevEl = document.querySelector('img[data-id="'+tempPre+'"]');
                document.querySelector('#previous img').className = ' ';
            } else {
                document.querySelector('#previous img').className = 'hide';
            }


            if(document.querySelector('img[data-id="'+nex+'"]')) {
                document.querySelector('#next img').className = ' ';
                el.nextEl = document.querySelector('img[data-id="'+nex+'"]');
                document.querySelector('#next img').className = ' ';
            } else {
                document.querySelector('#next img').className = 'hide';
            }
        }
        var toggleClose = function(e){
            if(el.overlay.className == 'hide') {
                el.overlay.className = '';
            } else {
                el.overlay.className = 'hide';
            }
        }
        eL();
    }



    function load() {
        if(document.querySelector('body.home') || document.querySelector('body.contact')) {
            home();
        } 
        if(document.querySelector('body.gall')) {
            gallery();
        }

        
    }

    load();
    return {
          // e : home.showErrors,
          // f : home.hideErrors
          h : home
    };
})();
