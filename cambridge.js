$(document).ready(function(){
  $("#dropbtn1").click(function(){
    $("#drop-content").slideToggle(1500);
  });
});


consoleText(['#LEARNING CENTRE', 'NO 1 IN TASHKENT', 'TEAM OF PROFESSIONALS', 'TOP SCORES', 'QUALITY TRAINING'], 'text');

function consoleText(words, id) {
  var visible = true;
  
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id)
  window.setInterval(function() {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount)
      window.setTimeout(function() {
        
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function() {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount)
      letterCount += x;
    }
  }, 120)
  
}


let k=0;
$(document).ready(function(){
  $("#ieltsbtn").click(function(){    
    k++;
    $("#panelcont").slideToggle(600);
    
    if(k%2===1){
    $("#ieltsbtn").css("border-bottom" , "1px solid white");
    $("#ieltsbtn").css("padding-bottom" , "15px");
    $("#ieltsbtn").css("border-bottom-right-radius" , "5px");
    $("#ieltsbtn").css("border-bottom-left-radius" , "5px");
    $("#fas1").hide();
    $("#fas2").show();
  } else{
    $("#ieltsbtn").css("border-bottom" , "none");
    $("#ieltsbtn").css("padding-bottom" , "0px");
    $("#fas1").show();
    $("#fas2").hide();
  }
  });
});

let p=0;
$(document).ready(function(){
  $("#aieltsbtn").click(function(){    
    p++;
    $("#apanelcont").slideToggle(600);
    
    if(p%2===1){
    $("#aieltsbtn").css("border-bottom" , "1px solid white");
    $("#aieltsbtn").css("padding-bottom" , "15px");
    $("#aieltsbtn").css("border-bottom-right-radius" , "5px");
    $("#aieltsbtn").css("border-bottom-left-radius" , "5px");
    $("#afas1").hide();
    $("#afas2").show();
  } else{
    $("#aieltsbtn").css("border-bottom" , "none");
    $("#aieltsbtn").css("padding-bottom" , "0px");
    $("#afas1").show();
    $("#afas2").hide();
  }
  });
});

let l=0;
$(document).ready(function(){
  $("#ieltsbtn_").click(function(){    
    l++;
    $("#panelcont_").slideToggle(600);
    
    if(l%2===1){
    $("#ieltsbtn_").css("border-bottom" , "1px solid white");
    $("#ieltsbtn_").css("padding-bottom" , "15px");
    $("#ieltsbtn_").css("border-bottom-right-radius" , "5px");
    $("#ieltsbtn_").css("border-bottom-left-radius" , "5px");
    $("#fas_1").hide();
    $("#fas_2").show();
  } else{
    $("#ieltsbtn_").css("border-bottom" , "none");
    $("#ieltsbtn_").css("padding-bottom" , "0px");
    $("#fas_1").show();
    $("#fas_2").hide();
  }
  });
});

let m=0;
$(document).ready(function(){
  $("#aieltsbtn_").click(function(){    
    m++;
    $("#apanelcont_").slideToggle(600);
    
    if(m%2===1){
    $("#aieltsbtn_").css("border-bottom" , "1px solid white");
    $("#aieltsbtn_").css("padding-bottom" , "15px");
    $("#aieltsbtn_").css("border-bottom-right-radius" , "5px");
    $("#aieltsbtn_").css("border-bottom-left-radius" , "5px");
    $("#afas_1").hide();
    $("#afas_2").show();
  } else{
    $("#aieltsbtn_").css("border-bottom" , "none");
    $("#aieltsbtn_").css("padding-bottom" , "0px");
    $("#afas_1").show();
    $("#afas_2").hide();
  }
  });
});