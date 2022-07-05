
let slideIndex = 0;
let slideTimer;
const slideDelay = 10;
const slides = document.getElementsByClassName("slide");
const cubes = document.getElementsByClassName("cube");
const bar = document.getElementsByClassName("progress_bar");

function ShowSlide(index){
    if (index === slides.length) slideIndex = 0;

    else if (index < 0) slideIndex = slides.length-1;
    else slideIndex = index;
    
    for (i=0; i< slides.length; i++) {
        slides[i].style.display = "none";
        cubes[i].classList.remove("active_cube");
    }
    
    //console.log("SlideIndex: "+slideIndex);
    //console.log("index: "+index);
    SlideReset();
    slides[slideIndex].style.display = "block";
    cubes[slideIndex].classList.add("active_cube");
}

function SlideReset(){
    window.clearInterval(slideTimer);
    
    bar[0].style.animation = null;
    
    setTimeout(function(){
        bar[0].style.animation = "progression linear " + (slideDelay-.11) + "s";

        //console.log(slideDelay-.11);
        slideTimer = window.setInterval(function(){
            ShowSlide(slideIndex+=1);
            }, slideDelay*1000);
    },10);
}

for (i=0;i<cubes.length;i++) {
    cubes[i].addEventListener("click", function(){
        let si = this.getAttribute("data-index");
        ShowSlide(Number(si));
    })
};

prev.addEventListener("click", function(){
    ShowSlide(slideIndex-=1);
});

next.addEventListener("click", function(){
    ShowSlide(slideIndex+=1);
});

ShowSlide(slideIndex);


// API QUOTABLE

const quotable_search = document.querySelector('#search_1');
quotable_search.addEventListener('click',Generate_quotable);

function onResponse_quotable(response){
    return response.json();
}

function onJson_quotable(json){
    console.log(json);
    
    const text = json.content;
    const author = json.author;
    const box = document.querySelector('#container_1');
    box.innerHTML = ' ';
    const text_box = document.createElement('div');
    text_box.innerHTML = text;
    const author_box = document.createElement('p');
    author_box.innerHTML = author;
    box.appendChild(text_box);
    box.appendChild(author_box); 
}

function Generate_quotable(event){
    event.preventDefault();
    //eseguo la fetch
    fetch("/quotable").then(onResponse_quotable).then(onJson_quotable);
}
