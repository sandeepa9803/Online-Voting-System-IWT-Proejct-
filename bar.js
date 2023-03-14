function box(){
    var userval = confirm("Are you sure to confirm !!!");
    if(userval == true)
    {
       alert("Successfully Voted !");
    }
    else
    {
        alert("Vote Cancelled !");    
    }
}

(function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;
  
    let voting = "sep 30, 2021 00:00:00",
        countDown = new Date(voting).getTime(),
        x = setInterval(function() {    
  
          let now = new Date().getTime(),
              distance = countDown - now;
  
          document.getElementById("days").innerText = Math.floor(distance / (day)),
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
  
         
          if (distance < 0) {
            let headline = document.getElementById("headline"),
                countdown = document.getElementById("countdown"),
                content = document.getElementById("content");
  
            headline.innerText = "Event over!";
            countdown.style.display = "none";
            content.style.display = "block";
  
            clearInterval(x);
          }
          
        }, 0)
    }());