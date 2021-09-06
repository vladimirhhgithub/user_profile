<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Add React in One Minute</title>
<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<!--<div class="slider-image-album">
<img src="https://images.unsplash.com/photo-1449034446853-66c86144b0ad?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="sliderimg">
</div>-->


<!--<div class="albumize-t-window close" id="albumize-t-window">
<div class="albumize-t-slider" id="albumize-t-slider"></div>
<div class="albumize-t-pane" id="albumize-t-pane">
<div class="albumize-t-header" id="albumize-t-header"></div>
<div class="albumize-t-body" id="albumize-t-body">
<img src="https://via.placeholder.com/150/92c952" id="albumizeimg1" class="albumize-thumb" data-album="1">
<img src="https://via.placeholder.com/150/771796" id="albumizeimg2" class="albumize-thumb" data-album="2">
</div>
</div>
</div>

<div id="album">
<div data-jgallery-album-title="Album 1" class="album" data-current="0">

<h1 class="authorimg1 authortext" style="font-size: 14px; width: 150px;">Leanne Graham</h1>
<span><img src="https://via.placeholder.com/150/92c952" id="album1" class="authorimg1" data-album="1"></span>
<span><img src="https://via.placeholder.com/150/771796" id="album2" class="authorimg1" data-album="2"></span>
<span><img src="https://via.placeholder.com/150/24f355" id="album3" class="authorimg1" data-album="3"></span>
<span><img src="https://via.placeholder.com/150/d32776" id="album4" class="authorimg1" data-album="4"></span>
<span><img src="https://via.placeholder.com/150/f66b97" id="album5" class="authorimg1" data-album="5"></span>

<h1 class="authorimg2 authortext" style="font-size: 14px; width: 150px;">Ervin Howell</h1>
<span><img src="https://via.placeholder.com/150/56a8c2" id="album6" class="authorimg2" data-album="1"></span>
<span><img src="https://via.placeholder.com/150/b0f7cc" id="album7" class="authorimg2" data-album="2"></span>
<span><img src="https://via.placeholder.com/150/54176f" id="album8" class="authorimg2" data-album="3"></span>
<span><img src="https://via.placeholder.com/150/51aa97" id="album9" class="authorimg2" data-album="4"></span>
<span><img src="https://via.placeholder.com/150/810b14" id="album10" class="authorimg2" data-album="5"></span>

<h1 class="authorimg3" style="font-size: 14px; width: 150px;">Clementine Bauch</h1>

<h1 class="authorimg4" style="font-size: 14px; width: 150px;">Patricia Lebsack</h1>

<h1 class="authorimg5" style="font-size: 14px; width: 150px;">Chelsey Dietrich</h1>

</div>
</div>



<div class="slider-menu-image modal-image">
<div class="sliderarrowprev"></div>
<div class="sliderarrownext"></div>
<div class="slider">
<div class="slider-menu" data-current="0">

</div>
</div>
</div>

<div class="thumbnails close" style="overflow: hidden; padding: 0px; width: 1920px;">
<div class="jspContainer" style="width: 1500px; height: 90px;">
<div class="jspPane" style="padding: 0px; top: 0px; left: 0px; width: 1920px;" data-current="0">
</div>
</div>
</div>

<div class="arrowprev arrowprev-close"></div>
<div class="arrownext arrownext-close"></div>
<div class="arrowprev-thumbnails close"></div>
<div class="arrownext-thumbnails close"></div>
<div class="modal-show modal-image"></div>
<div class="albumize-close close">x</div>
<div class="albumize-t-slider-thumbnails close" id="albumize-t-slider"></div>-->
<div class="text"></div>
<div id="slidertext1"></div>
<div class="slidertext2"></div>
<div class="slidertext3"></div>
</body>
</html>

<script type="text/babel">
/*const e = React.createElement;

class LikeButton extends React.Component {
  handleClick() {
    alert('По кнопке кликнули');
  }
  render() {
    return <button onClick={this.handleClick}>Нажми на меня</button>;
  }
}

const domContainer = document.querySelector('.text');
ReactDOM.render(e(LikeButton), domContainer);*/

class Slidershow extends React.Component {
  state = {
    tweetData: [],
    tweetRender: [],
    listTweet: []
  };

  componentDidMount() {
    setTimeout(() => {
      this.setState({
        tweetData: [
          {
            id: 1,
            name: "foo",
            username: "@foo"
          },
          {
            id: 2,
            name: "bar",
            username: "@bar"
          }
        ]
      });
    }, 1000);
  }

  render() {
    return (
      /*<div id="main">
        <h2>Tweet</h2>
        <div id="stream" className="albumtext">
          {this.state.tweetData.map(obj => (
            <div key={obj.id}>
              {obj.username} - {obj.name}
            </div>
          ))}
        </div>
      </div>*/

      <div className="album-text">
      <div className="albumize-t-window close" id="albumize-t-window">
<div className="albumize-t-slider" id="albumize-t-slider"></div>
<div className="albumize-t-pane" id="albumize-t-pane">
<div className="albumize-t-header" id="albumize-t-header"></div>
<div className="albumize-t-body" id="albumize-t-body">
<img src="https://via.placeholder.com/150/92c952" id="albumizeimg1" className="albumize-thumb" data-album="1"/>
<img src="https://via.placeholder.com/150/771796" id="albumizeimg2" className="albumize-thumb" data-album="2"/>
</div>
</div>
</div>

      <div id="album">
<div data-jgallery-album-title="Album 1" className="album" data-current="0">

<h1 className="authorimg1 authortext" style={{fontSize: 14, width: 150}}>Leanne Graham</h1>
<span><img src="https://via.placeholder.com/150/92c952" id="album1" className="authorimg1" data-album="1"/></span>
<span><img src="https://via.placeholder.com/150/771796" id="album2" className="authorimg1" data-album="2"/></span>
<span><img src="https://via.placeholder.com/150/24f355" id="album3" className="authorimg1" data-album="3"/></span>
<span><img src="https://via.placeholder.com/150/d32776" id="album4" className="authorimg1" data-album="4"/></span>
<span><img src="https://via.placeholder.com/150/f66b97" id="album5" className="authorimg1" data-album="5"/></span>

<h1 className="authorimg2 authortext" style={{fontSize: 14, width: 150}}>Ervin Howell</h1>
<span><img src="https://via.placeholder.com/150/56a8c2" id="album6" className="authorimg2" data-album="1"/></span>
<span><img src="https://via.placeholder.com/150/b0f7cc" id="album7" className="authorimg2" data-album="2"/></span>
<span><img src="https://via.placeholder.com/150/54176f" id="album8" className="authorimg2" data-album="3"/></span>
<span><img src="https://via.placeholder.com/150/51aa97" id="album9" className="authorimg2" data-album="4"/></span>
<span><img src="https://via.placeholder.com/150/810b14" id="album10" className="authorimg2" data-album="5"/></span>

<h1 className="authorimg3" style={{fontSize: 14, width: 150}}>Clementine Bauch</h1>

<h1 className="authorimg4" style={{fontSize: 14, width: 150}}>Patricia Lebsack</h1>

<h1 className="authorimg5" style={{fontSize: 14, width: 150}}>Chelsey Dietrich</h1>
</div>
</div>

<div className="slider-menu-image modal-image">
<div className="sliderarrowprev"></div>
<div className="sliderarrownext"></div>
<div className="slider">
<div className="slider-menu" data-current="0">

</div>
</div>
</div>

<div className="thumbnails close">
<div className="jspContainer">
<div className="jspPane" data-current="0">
</div>
</div>
</div>

<div className="arrowprev arrowprev-close"></div>
<div className="arrownext arrownext-close"></div>
<div className="arrowprev-thumbnails close"></div>
<div className="arrownext-thumbnails close"></div>
<div className="modal-show modal-image"></div>
<div className="albumize-close close">x</div>
<div className="albumize-t-slider-thumbnails close" id="albumize-t-slider"></div>

</div>
    );
  }
}

ReactDOM.render(<Slidershow/>, document.querySelector(".text"));

function Welcometext1(props) {
  return <h1>Hello, {props.name}</h1>;
}

function Apptext1() {
  return (
    <div>
      <Welcometext1 name="Text1" />
      <Welcometext1 name="Text2" />
      <Welcometext1 name="Text3" />
    </div>
  );
}

ReactDOM.render(<Apptext1/>, document.getElementById('slidertext1'));

function Text1() {
  function handleClick(e) {
    e.preventDefault();
    alert("Текст");
  }

  return (
    <button onClick={handleClick}>Текст1</button>
  );
}

ReactDOM.render(<Text1/>, document.querySelector('.slidertext2'));

class Text2 extends React.Component {
  constructor(props) {
    super(props);
    this.state = {isToggleOn: true};

    // This binding is necessary to make `this` work in the callback
    this.handleClick = this.handleClick.bind(this);
  }

  handleClick() {
    this.setState(prevState => ({
      isToggleOn: !prevState.isToggleOn
    }));
  }

  render() {
    return (
      /*<button className={this.state.isToggleOn ? 'slideralbum1' : 'slideralbum2'} onClick={this.handleClick}>{this.state.isToggleOn ? 'ON' : 'OFF'}</button>*/
      <button className={this.state.isToggleOn ? 'slideralbum1' : 'slideralbum1'} onClick={this.handleClick}>{this.state.isToggleOn ? 'ON' : 'OFF'}</button>
    );
  }
}

ReactDOM.render(<Text2/>, document.querySelector('.slidertext3'));
</script>

<style>
.thumbnails {
  overflow: hidden;
  padding: 0px;
  width: 1920px;
}

.jspContainer {
  width: 1500px;
  height: 90px;
}

.jspPane {
  padding: 0px;
  top: 0px;
  left: 0px;
  width: 1920px;
}
</style>

<style>
.text1 {
  background: black;
  padding-left: 50px;
  padding-right: 50px;
  text-align: center;
}

.textalbum {
  text-align: center;
  background: black;
  padding-left: 50px;
  justify-content: center;
}
</style>

<script>
var album_limit = 100;

var limit = 5;

var i=0;

window.addEventListener("load", function() {

var slideWidth = 1920;
var slideWidthimg = 150;
var slideTimer;        //Интервал смены кадров

function slidershow() {
    jQuery(".slider-menu-image").toggleClass("modal-image");
    jQuery(".arrowprev").toggleClass("arrowprev-close");
    jQuery(".arrownext").toggleClass("arrownext-close");
    jQuery(".modal-show").toggleClass("modal-image");
    jQuery(".thumbnails").toggleClass("close");
    jQuery("#albumize-t-window").toggleClass("close");
    jQuery(".albumize-close").toggleClass("close");
    jQuery(".albumize-t-slider-thumbnails").toggleClass("close");
    jQuery(".arrowprev-thumbnails").toggleClass("close");
    jQuery(".arrownext-thumbnails").toggleClass("close");
}

jQuery(".modal-show").click(function() {
    slidershow();
}
);

jQuery(".albumize-close").click(function() {
    slidershow();
}
);

jQuery(".albumize-t-slider").click(function() {
    jQuery(".albumize-t-window").toggleClass("albumize-t-window-text");
    jQuery(".albumize-t-slider").toggleClass("albumize-t-slider-text");
}
);

jQuery(".albumize-t-slider-thumbnails").click(function() {
    jQuery(".thumbnails").toggleClass("albumize-t-slider-thumbnails-text");
    jQuery(".arrowprev-thumbnails").toggleClass("arrowprev-thumbnails-text");
    jQuery(".arrownext-thumbnails").toggleClass("arrownext-thumbnails-text");
}
);




jQuery(document).on("click", "#album1", function() {
slidershow();
jQuery(".slidermenu1").remove();
jQuery(".slidermenutext1").remove();
jQuery(".slidermenu2").remove();
jQuery(".slidermenutext2").remove();
jQuery(".slider-menu-thumbnails").removeClass("slider-menu-thumbnails-text");
var sliderimg=jQuery(this).attr("id").replace(/album/, '');
var sliderimgtext=parseInt(jQuery(this).data("album"));
var slidermenuimg=parseInt(jQuery(".slider-menu").data("album"));

jQuery(function(){
    jQuery.getJSON("albums.json", function(albums) {
      jQuery.getJSON("photos.json", function(photos) {
        jQuery.getJSON("users.json", function(users) {
          //for (var i=0; i<albums.length; i++) {
      for (var j=0; j<5; j++) {
        //if (albums[i].id==photos[j].albumId) {
        //if (!jQuery(".slider-image").hasClass("slider-image")) {
        jQuery('.slider-menu').append('<div class="slider-image slidermenu1"><img src="'+photos[j].url+'" class="slider-menu-img slider-menu-img-text1 albumimg'+photos[j].albumId+'" id="slider-image-albumimg'+photos[j].id+'" data-album="1"><div class="slide-name">'+photos[j].title+'</div></div>');
      //}
//}
//}
}
}
);
}
);
}
);
}
);

jQuery(function(){
  jQuery.getJSON("photos.json", function(photos) {
    for(var i=0; i<5; i++){
      //if (!jQuery(".slider-thumbnails").hasClass("slidermenutext1")) {
      jQuery('.jspPane').append('<div class="slider-thumbnails slidermenutext1" tabindex="0"><img src="'+photos[i].url+'" class="slider-menu-thumbnails slider-menu-thumbnails-text" id="slider-image-thumbnails'+photos[i].id+'"></div>');
    //}
    }
  }
  );
}
);

var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));
currentSlide=0;
currentSlideimg=0;
jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
}
);

jQuery(document).on("click", "#album2", function() {
slidershow();
jQuery(".slidermenu1").remove();
jQuery(".slidermenutext1").remove();
jQuery(".slidermenu2").remove();
jQuery(".slidermenutext2").remove();
var sliderimg=jQuery(this).attr("id").replace(/album/, '');
var sliderimgtext=parseInt(jQuery(this).data("album"));
var slidermenuimg=parseInt(jQuery(".slider-menu").data("album"));

jQuery(function(){
    jQuery.getJSON("albums.json", function(albums) {
      jQuery.getJSON("photos.json", function(photos) {
        jQuery.getJSON("users.json", function(users) {
          //for (var i=0; i<albums.length; i++) {
      for (var j=5; j<10; j++) {
        //if (albums[i].id==photos[j].albumId) {
          //if (!jQuery(".slidermenu2")) {
        jQuery('.slider-menu').append('<div class="slider-image slidermenu2"><img src="'+photos[j].url+'" class="slider-menu-img slider-menu-img-text2 albumimg'+photos[j].albumId+'" id="slider-image-albumimg'+photos[j-limit].id+'" data-album="2"><div class="slide-name">'+photos[j].title+'</div></div>');
      //}
    //}
    //}
  }
}
);
}
);
}
);
}
);

jQuery(function(){
  jQuery.getJSON("photos.json", function(photos) {
    for(var i=5; i<10; i++){
      //if (!jQuery(".slidermenutext2")) {
      jQuery('.jspPane').append('<div class="slider-thumbnails slidermenutext2" tabindex="0"><img src="'+photos[i].url+'" class="slider-menu-thumbnails" id="slider-image-thumbnails'+photos[i-limit].id+'"></div>');
    //}
    }
  }
  );
}
);

var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));
currentSlide=0;
currentSlideimg=0;
jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
}
);


jQuery(document).on("click", "#albumizeimg1", function() {
jQuery(".slidermenu1").remove();
jQuery(".slidermenutext1").remove();
jQuery(".slidermenu2").remove();
jQuery(".slidermenutext2").remove();
var sliderimg=jQuery(this).attr("id").replace(/album/, '');
var sliderimgtext=parseInt(jQuery(this).data("album"));
var slidermenuimg=parseInt(jQuery(".slider-menu").data("album"));

jQuery(function(){
    jQuery.getJSON("albums.json", function(albums) {
      jQuery.getJSON("photos.json", function(photos) {
        jQuery.getJSON("users.json", function(users) {
          //for (var i=0; i<albums.length; i++) {
      for (var j=0; j<5; j++) {
        //if (albums[i].id==photos[j].albumId) {
        //if (!jQuery(".slider-image").hasClass("slider-image")) {
        jQuery('.slider-menu').append('<div class="slider-image slidermenu1"><img src="'+photos[j].url+'" class="slider-menu-img slider-menu-img-text1 albumimg'+photos[j].albumId+'" id="slider-image-albumimg'+photos[j].id+'" data-album="1"><div class="slide-name">'+photos[j].title+'</div></div>');
      //}
//}
//}
}
}
);
}
);
}
);
}
);

jQuery(function(){
  jQuery.getJSON("photos.json", function(photos) {
    for(var i=0; i<5; i++){
      //if (!jQuery(".slider-thumbnails").hasClass("slidermenutext1")) {
      jQuery('.jspPane').append('<div class="slider-thumbnails slidermenutext1" tabindex="0"><img src="'+photos[i].url+'" class="slider-menu-thumbnails" id="slider-image-thumbnails'+photos[i].id+'"></div>');
    //}
    }
  }
  );
}
);

var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));
currentSlide=0;
currentSlideimg=0;
//jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
//jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
}
);

jQuery(document).on("click", "#albumizeimg2", function() {
jQuery(".slidermenu1").remove();
jQuery(".slidermenutext1").remove();
jQuery(".slidermenu2").remove();
jQuery(".slidermenutext2").remove();
var sliderimg=jQuery(this).attr("id").replace(/album/, '');
var sliderimgtext=parseInt(jQuery(this).data("album"));
var slidermenuimg=parseInt(jQuery(".slider-menu").data("album"));

jQuery(function(){
    jQuery.getJSON("albums.json", function(albums) {
      jQuery.getJSON("photos.json", function(photos) {
        jQuery.getJSON("users.json", function(users) {
          //for (var i=0; i<albums.length; i++) {
      for (var j=5; j<10; j++) {
        //if (albums[i].id==photos[j].albumId) {
          //if (!jQuery(".slidermenu2")) {
        jQuery('.slider-menu').append('<div class="slider-image slidermenu2"><img src="'+photos[j].url+'" class="slider-menu-img slider-menu-img-text2 albumimg'+photos[j].albumId+'" id="slider-image-albumimg'+photos[j-limit].id+'" data-album="2"><div class="slide-name">'+photos[j].title+'</div></div>');
      //}
    //}
    //}
  }
}
);
}
);
}
);
}
);

jQuery(function(){
  jQuery.getJSON("photos.json", function(photos) {
    for(var i=5; i<10; i++){
      //if (!jQuery(".slidermenutext2")) {
      jQuery('.jspPane').append('<div class="slider-thumbnails slidermenutext2" tabindex="0"><img src="'+photos[i].url+'" class="slider-menu-thumbnails" id="slider-image-thumbnails'+photos[i-limit].id+'"></div>');
    //}
    }
  }
  );
}
);

var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));
currentSlide=0;
currentSlideimg=0;
jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
}
);









/*jQuery(document).on("click", ".authorimg1", function() {
var id=jQuery(this).attr("id").replace(/album/, '');
var sliderimg=parseInt(jQuery(this).data("album"));
var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));
currentSlide=id-1;
currentSlideimg=id-1;
jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
}
);

jQuery(document).on("click", ".authorimg2", function() {
var id=jQuery(this).attr("id").replace(/album/, '');
var sliderimg=parseInt(jQuery(this).data("album"));
var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));
currentSlide=id-1;
currentSlideimg=id-1;
jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
}
);*/

jQuery(document).on("click", ".slider-menu-thumbnails", function() {
var id=jQuery(this).attr("id").replace(/slider-image-thumbnails/, '');
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
currentSlide=id-1;
jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
jQuery(".slider-menu-thumbnails").removeClass("slider-thumbnails-text");
jQuery(this).addClass("slider-thumbnails-text");
jQuery(".slider-menu-thumbnails").removeClass("slider-menu-thumbnails-text");
}
);

const arr = [10 ,12, 15 ,21];
for (var i = 0; i< arr.length; i++) {
setTimeout(function() {
  console.log(i>13 ? 'Good:' + arr[i]: 'Bad: ${arr[i]}');
}, 3000
);
}

/*функция, сменяющая слайды каждую секунду*/
function nextSlide(){
    var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
    currentSlide++;  //увеличиваем его значение
    if(currentSlide==limit) //перематываем к началу, если слайд последний
    {
        currentSlide=0;   
    }
    /*передвигаем список и сохраняем значение текущего слайда*/
    jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
    //jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
}



jQuery(".arrowprev").click(function() {
    var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
    var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
    currentSlideimg=currentSlide;
    currentSlide--;  //увеличиваем его значение
    currentSlideimg--;

    if(currentSlide<0) //перематываем к началу, если слайд последний
    {
        currentSlide=limit-1;
        currentSlideimg=limit-1;
    }
    /*передвигаем список и сохраняем значение текущего слайда*/
    jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
    jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
    jQuery(".slider-menu-thumbnails").removeClass("slider-thumbnails-text");
    jQuery(".slider-menu-thumbnails:eq("+currentSlideimg+")").addClass("slider-thumbnails-text");
    jQuery(".slider-menu-thumbnails").removeClass("slider-menu-thumbnails-text");
    //jQuery('.slider-thumbnails').addClass("slider-thumbnails-text").data('current',currentSlideimg);
}
);

jQuery(".arrownext").click(function() {
    var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
    var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
    currentSlideimg=currentSlide;
    //var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
    currentSlide++;  //увеличиваем его значение
    currentSlideimg++;

    if(currentSlide==limit) //перематываем к началу, если слайд последний
    {
        currentSlide=0;
        currentSlideimg=0;
    }

    jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
    jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
    jQuery(".slider-menu-thumbnails").removeClass("slider-thumbnails-text");
    jQuery(".slider-menu-thumbnails:eq("+currentSlideimg+")").addClass("slider-thumbnails-text");
    jQuery(".slider-menu-thumbnails").removeClass("slider-menu-thumbnails-text");
}
);

jQuery(".arrowprev-thumbnails").click(function() {
    var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
    currentSlideimg--;

    if(currentSlideimg<0) //перематываем к началу, если слайд последний
    {
        currentSlideimg=limit-1;   
    }
    /*передвигаем список и сохраняем значение текущего слайда*/
    jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
    jQuery(".slider-menu-thumbnails").removeClass("slider-thumbnails-text");
    jQuery(".slider-menu-thumbnails:eq("+currentSlideimg+")").addClass("slider-thumbnails-text");
    jQuery(".slider-menu-thumbnails").removeClass("slider-menu-thumbnails-text");
}
);

jQuery(".arrownext-thumbnails").click(function() {
    var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
    currentSlideimg++;

    if(currentSlideimg==limit) //перематываем к началу, если слайд последний
    {
        currentSlideimg=0;   
    }
    /*передвигаем список и сохраняем значение текущего слайда*/
    jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
    jQuery(".slider-menu-thumbnails").removeClass("slider-thumbnails-text");
    jQuery(".slider-menu-thumbnails:eq("+currentSlideimg+")").addClass("slider-thumbnails-text");
    jQuery(".slider-menu-thumbnails").removeClass("slider-menu-thumbnails-text");
}
);
}
);
</script>

<style>
body {
  background: #03a9f4;
}

.slider-menu-image {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
}

.slider {
  position: fixed;
  /*top: 20%;*/
  top: 0px;
  /*position: relative;
  overflow-x: hidden;
  max-width: 250px;
  z-index: 10000;
  cursor: pointer;*/
  overflow: hidden;
  background: transparent;
  /*width: 800px;*/
  width: 1920px;
  /*height: 500px;*/
  height: 1080px;
  /*transform: translate(0px, 30%);*/
  z-index: 10000;
}

.slide-name {
  font-size: 20px;
  color: black;
  padding-top: 20px;
  padding-bottom: 20px;
  text-align: center;
}

.slider-menu {
  position: relative;
  display: flex;
}

.slider-image {
  /*position: absolute;
  background: url(https://images.unsplash.com/photo-1449034446853-66c86144b0ad?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80);
  background-size: cover;
  background-repeat: no-repeat;
  margin-right: 50px;*/
}

.sliderimg {
  width: 250px;
}

.slider-menu-img {
  /*width: 800px;
  height: 500px;*/
  width: 1920px;
  height: 1080px;
  z-index: 100000;
}

.arrowprev {
  /*position: absolute;*/
  position: fixed;
  top: 50%;
  left: 0px;
  border: transparent;
  border-top: 50px solid transparent;
  border-bottom: 50px solid transparent;
  border-left: 50px solid transparent;
  border-right: 50px solid red;
  z-index: 10000;
  cursor: pointer;
}

.arrownext {
  /*position: absolute;*/
  position: fixed;
  top: 50%;
  right: 0px;
  border: transparent;
  border-top: 50px solid transparent;
  border-bottom: 50px solid transparent;
  border-left: 50px solid red;
  border-right: 50px solid transparent;
  z-index: 10000;
  cursor: pointer;
}

.sliderarrowprev {
  position: absolute;
  top: 30px;
  left: 100px;
  border: transparent;
  border-top: 50px solid transparent;
  border-bottom: 50px solid transparent;
  border-left: 50px solid transparent;
  border-right: 50px solid red;
  z-index: 10000;
  cursor: pointer;
  display: none;
}

.sliderarrownext {
  position: absolute;
  top: 30px;
  right: 150px;
  border: transparent;
  border-top: 50px solid transparent;
  border-bottom: 50px solid transparent;
  border-left: 50px solid red;
  border-right: 50px solid transparent;
  z-index: 10000;
  cursor: pointer;
  display: none;
}

.arrowprev-close {
  display: none;
}

.arrownext-close {
  display: none;
}

.slider-image-album {
  /*position: absolute;
  width: 250px;
  display: flex;*/
  margin-right: 20px;
  cursor: pointer;
}

.slider-album-img {
  /*width: 250px;*/
}

.modal-image {
   display: none;
}

.modal-show {
   position: fixed;
   top: 0px;
   width: 100%;
   height: 100%;
   background: #8080806b;
   z-index: 1;
}

.album-slider-img {
   margin-right: 50px;
}

.thumbnails {
   background: #000;
   background: rgba(0, 0, 0, 0.8);
   height: 90px;
   left: 0;
   overflow: hidden;
   position: fixed;
   bottom: 0px;
   width: 100%;
   transition: 0.5s ease-out;
   transition-property: bottom;
   display: flex;
   justify-content: center;
   z-index: 100000;
}

.jspContainer {
   overflow: hidden;
   position: relative;
}

.jspPane {
   position: absolute;
   display: flex;
}

.thumbnails ul {
   margin: 0;
   padding: 0;
}

.thumbnails li {
   float: left;
   list-style: none;
   margin: 5px;
   padding: 0;
}

.thumbnails a {
   outline: none;
}

a {
   color: #F30;
   text-decoration: none;
}

.thumbnails img {
   width: 150px;
   cursor: pointer;
}

.close {
   display: none;
}

.albumize-t-window {
   position: fixed;
   top: 17%;
   left: 1%;
   width: 23%;
   height: 66%;
   -webkit-transition: left .3s ease-out;
   -moz-transition: left .3s ease-out;
   -o-transition: left .3s ease-out;
   transition: left .3s ease-out;
   z-index: 100000;
}

.albumize-t-window-text {
   position: fixed;
   top: 17%;
   left: -500px;
   width: 23%;
   height: 66%;
   -webkit-transition: left .3s ease-out;
   -moz-transition: left .3s ease-out;
   -o-transition: left .3s ease-out;
   transition: left .3s ease-out;
   transition: 0.5s ease-out;
   transition-property: left;
   z-index: 100000;
}

.albumize-t-slider {
   position: absolute;
   top: 40%;
   right: 0;
   width: 25%;
   height: 13%;
   float: right;
   border: thin solid #111;
   background-color: #a9a9a9;
   background-image: url("https://www.jqueryscript.net/demo/jQuery-Album-Like-Image-Gallery-Plugin-Albumize/img/1.png");
   background-repeat: no-repeat;
   background-position: 45% 45%;
   font-size: 2.5em;
   font-weight: 700;
   color: #111;
   text-align: center;
   opacity: .9;
   filter: alpha(opacity=90);
   cursor: pointer;
   -webkit-border-radius: 7px;
   -moz-border-radius: 7px;
   border-radius: 7px;
}

.albumize-t-slider-text {
   position: absolute;
   left: 500px;
   top: 30%;
   right: 0;
   width: 25%;
   height: 13%;
   float: right;
   border: thin solid #111;
   background-color: #a9a9a9;
   background-image: url("https://www.jqueryscript.net/demo/jQuery-Album-Like-Image-Gallery-Plugin-Albumize/img/1.png");
   background-repeat: no-repeat;
   background-position: 45% 45%;
   transition: 0.5s ease-out;
   transition-property: top;
   font-size: 2.5em;
   font-weight: 700;
   color: #111;
   text-align: center;
   opacity: .9;
   filter: alpha(opacity=90);
   cursor: pointer;
   -webkit-border-radius: 7px;
   -moz-border-radius: 7px;
   border-radius: 7px;
}

.albumize-t-pane {
   position: absolute;
   top: 0;
   left: 0;
   width: 73%;
   height: 100%;
   border: thin solid #090909;
   background-color: #333;
   float: left;
   -webkit-border-radius: 10px;
   -moz-border-radius: 10px;
   border-radius: 10px;
}

.albumize-t-header {
   height: 4%;
}

.albumize-t-body {
   height: 94%;
   overflow-y: auto;
}

.albumize-thumb {
   width: 90%;
   height: 29%;
   margin: 5%;
   display: block;
   cursor: pointer;
}

.icon-remove:before {
   content: "\f00d";
}

.albumize-close {
   position: fixed;
   top: 100px;
   right: 100px;
   padding: 0;
   background: 0 0;
   border: 0;
   -webkit-appearance: none;
   float: right;
   font-size: 44px;
   font-weight: 700;
   color: white;
   text-shadow: 0 1px 0 #fff;
   opacity: .9;
   filter: alpha(opacity=90);
   cursor: pointer;
   z-index: 10000;
}

.albumize-t-slider-thumbnails {
   position: fixed;
   left: 50px;
   bottom: 20px;
   width: 100px;
   height: 50px;
   float: right;
   border: thin solid #111;
   background-color: #a9a9a9;
   background-image: url("https://www.jqueryscript.net/demo/jQuery-Album-Like-Image-Gallery-Plugin-Albumize/img/1.png");
   background-repeat: no-repeat;
   background-position: 45% 45%;
   font-size: 2.5em;
   font-weight: 700;
   color: #111;
   text-align: center;
   opacity: .9;
   filter: alpha(opacity=90);
   cursor: pointer;
   -webkit-border-radius: 7px;
   -moz-border-radius: 7px;
   border-radius: 7px;
   z-index: 100000;
}

.albumize-t-slider-thumbnails-text {
   background: #000;
   background: rgba(0, 0, 0, 0.8);
   height: 90px;
   left: 0;
   overflow: hidden;
   position: fixed;
   bottom: -200px;
   transition: 0.5s ease-out;
   transition-property: bottom;
   width: 100%;
   z-index: 100000;
}

.arrowprev-thumbnails {
    /* position: absolute; */
    position: fixed;
    bottom: 20px;
    left: 130px;
    border: transparent;
    border-top: 30px solid transparent;
    border-bottom: 30px solid transparent;
    border-left: 30px solid transparent;
    border-right: 30px solid red;
    transition: 0.5s ease-out;
    transition-property: bottom;
    z-index: 100000;
    cursor: pointer;
}

.arrownext-thumbnails {
    /* position: absolute; */
    position: fixed;
    bottom: 20px;
    right: 130px;
    border: transparent;
    border-top: 30px solid transparent;
    border-bottom: 30px solid transparent;
    border-left: 30px solid red;
    border-right: 30px solid transparent;
    transition: 0.5s ease-out;
    transition-property: bottom;
    z-index: 100000;
    cursor: pointer;
}

.arrowprev-thumbnails-text {
    /* position: absolute; */
    position: fixed;
    bottom: -200px;
    left: 130px;
    border: transparent;
    border-top: 30px solid transparent;
    border-bottom: 30px solid transparent;
    border-left: 30px solid transparent;
    border-right: 30px solid red;
    transition: 0.5s ease-out;
    transition-property: bottom;
    z-index: 100000;
    cursor: pointer;
}

.arrownext-thumbnails-text {
    /* position: absolute; */
    position: fixed;
    bottom: -200px;
    right: 130px;
    border: transparent;
    border-top: 30px solid transparent;
    border-bottom: 30px solid transparent;
    border-left: 30px solid red;
    border-right: 30px solid transparent;
    transition: 0.5s ease-out;
    transition-property: bottom;
    z-index: 100000;
    cursor: pointer;
}

.slider-thumbnails:focus {
  border: 2px solid red;
}

.slider-thumbnails-text {
  border: 2px solid red;
}

.slider-thumbnails:nth-child(1) > .slider-menu-thumbnails-text {
  border: 2px solid red;
}

/*.slider-menu-thumbnails-text:nth-child(1) {
  border: 2px solid red;
}*/

.album > span {
  display: inline-block;
}
</style>

<!--<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Add React in One Minute</title>
<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<div class="slider-image-album">
<img src="https://images.unsplash.com/photo-1449034446853-66c86144b0ad?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="sliderimg">
</div>


<div class="albumize-t-window close" id="albumize-t-window">
<div class="albumize-t-slider" id="albumize-t-slider"></div>
<div class="albumize-t-pane" id="albumize-t-pane">
<div class="albumize-t-header" id="albumize-t-header"></div>
<div class="albumize-t-body" id="albumize-t-body">
<img src="https://www.jqueryscript.net/demo/jQuery-Album-Like-Image-Gallery-Plugin-Albumize/samples/4.jpg" data-albumize-album-id="0" data-albumize-image-id="0" class="albumize-thumb">
<img src="https://www.jqueryscript.net/demo/jQuery-Album-Like-Image-Gallery-Plugin-Albumize/samples/5.jpg" data-albumize-album-id="0" data-albumize-image-id="1" class="albumize-thumb">
</div>
</div>
</div>

<div id="album">
<div data-jgallery-album-title="Album 1" class="album" data-current="0">

<h1 class="authorimg1" style="font-size: 14px; width: 150px;">Leanne Graham</h1>
<span class="authorimg1" style="display: inline-block;"><img src="https://via.placeholder.com/150/92c952" id="album1"></span>
<span class="authorimg1" style="display: inline-block;"><img src="https://via.placeholder.com/150/771796" id="album2"></span>
<span class="authorimg1" style="display: inline-block;"><img src="https://via.placeholder.com/150/24f355" id="album3"></span>
<span class="authorimg1" style="display: inline-block;"><img src="https://via.placeholder.com/150/d32776" id="album4"></span>
<span class="authorimg1" style="display: inline-block;"><img src="https://via.placeholder.com/150/f66b97" id="album5"></span>

<h1 class="authorimg2" style="font-size: 14px; width: 150px;">Ervin Howell</h1>
<span class="authorimg2" style="display: inline-block;"><img src="https://via.placeholder.com/150/8e973b" id="album1"></span>
<span class="authorimg2" style="display: inline-block;"><img src="https://via.placeholder.com/150/121fa4" id="album2"></span>
<span class="authorimg2" style="display: inline-block;"><img src="https://via.placeholder.com/150/6efc5f" id="album3"></span>
<span class="authorimg2" style="display: inline-block;"><img src="https://via.placeholder.com/150/aa8f2e" id="album4"></span>
<span class="authorimg2" style="display: inline-block;"><img src="https://via.placeholder.com/150/5e04a4" id="album5"></span>

<h1 class="authorimg3" style="font-size: 14px; width: 150px;">Clementine Bauch</h1>
<span class="authorimg3" style="display: inline-block;"><img src="https://via.placeholder.com/150/e743b" id="album1"></span>
<span class="authorimg3" style="display: inline-block;"><img src="https://via.placeholder.com/150/a393af" id="album2"></span>
<span class="authorimg3" style="display: inline-block;"><img src="https://via.placeholder.com/150/35cedf" id="album3"></span>
<span class="authorimg3" style="display: inline-block;"><img src="https://via.placeholder.com/150/313b40" id="album4"></span>
<span class="authorimg3" style="display: inline-block;"><img src="https://via.placeholder.com/150/eaf2e1" id="album5"></span>

<h1 class="authorimg4" style="font-size: 14px; width: 150px;">Patricia Lebsack</h1>
<span class="authorimg4" style="display: inline-block;"><img src="https://via.placeholder.com/150/1d2ad4" id="album1"></span>
<span class="authorimg4" style="display: inline-block;"><img src="https://via.placeholder.com/150/a01c5b" id="album2"></span>
<span class="authorimg4" style="display: inline-block;"><img src="https://via.placeholder.com/150/9da52c" id="album3"></span>
<span class="authorimg4" style="display: inline-block;"><img src="https://via.placeholder.com/150/7f330f" id="album4"></span>
<span class="authorimg4" style="display: inline-block;"><img src="https://via.placeholder.com/150/877cd8" id="album5"></span>

<h1 class="authorimg5" style="font-size: 14px; width: 150px;">Chelsey Dietrich</h1>
<span class="authorimg5" style="display: inline-block;"><img src="https://via.placeholder.com/150/250289" id="album1"></span>
<span class="authorimg5" style="display: inline-block;"><img src="https://via.placeholder.com/150/6a0f83" id="album2"></span>
<span class="authorimg5" style="display: inline-block;"><img src="https://via.placeholder.com/150/3a5c29" id="album3"></span>
<span class="authorimg5" style="display: inline-block;"><img src="https://via.placeholder.com/150/e4cc33" id="album4"></span>
<span class="authorimg5" style="display: inline-block;"><img src="https://via.placeholder.com/150/dc17bf" id="album5"></span>

</div>
<div data-jgallery-album-title="Album 2" class="album-text" data-current="0">
<h1>Album 2</h1>
</div>
</div>

<div id="album">
<div data-jgallery-album-title="Album 1" class="album" data-current="0">
<h1>Album 1</h1>
<img src="https://www.jqueryscript.net/demo/Flexible-Photo-Gallery-Plugin-with-jQuery-CSS3-jGallery/images/thumbs/1.jpg" class="slider-image-album">
<img src="https://www.jqueryscript.net/demo/Flexible-Photo-Gallery-Plugin-with-jQuery-CSS3-jGallery/images/thumbs/10.jpg" class="slider-image-album">
</div>

<div data-jgallery-album-title="Album 2" class="album">
<h1>Album 2</h1>
<img src="https://www.jqueryscript.net/demo/Flexible-Photo-Gallery-Plugin-with-jQuery-CSS3-jGallery/images/thumbs/10.jpg" class="slider-image-album">
<img src="https://www.jqueryscript.net/demo/Flexible-Photo-Gallery-Plugin-with-jQuery-CSS3-jGallery/images/thumbs/11.jpg" class="slider-image-album">
</div>

<div data-jgallery-album-title="Album 3" class="album">
<h1>Album 3</h1>
<img src="https://www.jqueryscript.net/demo/Flexible-Photo-Gallery-Plugin-with-jQuery-CSS3-jGallery/images/thumbs/3.jpg" class="slider-image-album">
<img src="https://www.jqueryscript.net/demo/Flexible-Photo-Gallery-Plugin-with-jQuery-CSS3-jGallery/images/thumbs/4.jpg" class="slider-image-album">
</div>
</div>


<div class="slider-menu-image modal-image">
<div class="sliderarrowprev"></div>
<div class="sliderarrownext"></div>
<div class="slider">
<div class="slider-menu" data-current="0">
<div class="slider-image">
<img src="https://images.unsplash.com/photo-1449034446853-66c86144b0ad?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="slider-menu-img">
<div class="slide-name">Изображение 1</div>
</div>
<div class="slider-image">
<img src="https://www.jqueryscript.net/demo/Flexible-Photo-Gallery-Plugin-with-jQuery-CSS3-jGallery/images/large/1.jpg" class="slider-menu-img">
<div class="slide-name">Изображение 2</div>
</div>

</div>
</div>
</div>

<div class="thumbnails close" style="overflow: hidden; padding: 0px; width: 1920px;">
<div class="arrowprev-thumbnails"></div>
<div class="arrownext-thumbnails"></div>
<div class="jspContainer" style="width: 1500px; height: 90px;">
<div class="jspPane" style="padding: 0px; top: 0px; left: 0px; width: 1920px;" data-current="0">
<ul style="width: 1464px;">
<li><img src="https://tympanus.net/Tutorials/FullscreenSlideshowAudio/img/01.jpg" title="New York moving" data-valign="top"></li>
<li><img src="https://tympanus.net/Tutorials/FullscreenSlideshowAudio/img/02b.jpg" title="New York traffic" data-valign="bottom"></li>
</ul>
</div>
</div>
</div>

<div class="arrowprev arrowprev-close"></div>
<div class="arrownext arrownext-close"></div>
<div class="modal-show modal-image"></div>
<div class="albumize-close close">x</div>
<div class="albumize-t-slider-thumbnails close" id="albumize-t-slider"></div>
</body>
</html>

<script>
var album_limit = 100;

var limit = 500;

var i=0;
/*jQuery(function(){
  jQuery.getJSON("albums.json", function(albums) {
     jQuery.getJSON("photos.json", function(photos) {
    for(var i=0; i<album_limit; i++){
      jQuery('.slider-image-album').append('<div class="album-slider-img"><img src="'+photos[i].thumbnailUrl+'" class="slider-album-img"><div class="slide-name">'+albums[i].title+'</div></div>');
    }
  });
  }
  );
});*/

/*jQuery(function(){
  jQuery.getJSON("users.json", function(users) {
     jQuery.getJSON("albums.json", function(albums) {
      jQuery.getJSON("photos.json", function(photos) {
    //for(var i=0; i<album_limit; i++){
      $.each(users, function(){
        $.each(albums, function(){
          $.each(photos, function(){
        i++;
      //if (albums[i].id==photos[i].albumId || users[i].id==albums[i].userId) {
        //if (albums[i].id) {
      //jQuery('.album').append('<h1>'+users[i].name+'</h1><img src="'+photos[i].thumbnailUrl+'" class="slider-image-album" id="slider-menu-albumimg'+i+'">');
      //jQuery('.album').append('<img src="'+photos[i].thumbnailUrl+'" class="slider-image-album" id="slider-menu-albumimg'+i+'">');
    //}
  //}
  });
      }
      );
      }
      );
    }
    );
  }
  );
    }
    );
});*/

/*jQuery(function(){
  jQuery.getJSON("albums.json", function(albums) {
     jQuery.getJSON("photos.json", function(photos) {
      jQuery.getJSON("users.json", function(users) {
    for(var i=0; i<album_limit; i++){
      for(var j=0; j<album_limit; j++){
        //for(var k=0; k<album_limit; k++){
          //if (albums[i].id==photos[j].albumId || users[k].id==albums[i].userId) {
          if (albums[i].id==photos[j].albumId) {
          //jQuery('.album').append('<span><h1>'+users[k].name+'</h1><img src="'+photos[j].thumbnailUrl+'" class="slider-image-album" id="slider-menu-albumimg'+i+'"><h1>'+albums[k].title+'</h1></span>');
          jQuery('.album').append('<span style="display: inline-block;"><img src="'+photos[j].thumbnailUrl+'" class="slider-image-album albumimg'+photos[j].albumId+'" id="slider-menu-albumimg'+albums[j].id+'"><h1 style="font-size: 14px; width: 150px;">'+albums[j].title+'</h1><h1 style="font-size: 14px; width: 150px;">'+users[i].name+'</h1></span>');
        //}
    }
  }
}
  });
  }
  );
   }
   );
});*/

/*jQuery(function(){
  jQuery.getJSON("albums.json", function(albums) {
     jQuery.getJSON("photos.json", function(photos) {
      jQuery.getJSON("users.json", function(users) {
        for(var i=0; i<users.length; i++){
          jQuery('.album').append('<h1 style="font-size: 14px; width: 150px;">'+users[i].name+'</h1>');
        }
    for(var i=0; i<album_limit; i++){
      for(var j=0; j<album_limit; j++){
        //for(var k=0; k<album_limit; k++){
          //if (albums[i].id==photos[j].albumId || users[k].id==albums[i].userId) {
          if (albums[i].id==photos[j].albumId) {
            if (users[i].id==albums[j].userId) {
          //jQuery('.album').append('<span><h1>'+users[k].name+'</h1><img src="'+photos[j].thumbnailUrl+'" class="slider-image-album" id="slider-menu-albumimg'+i+'"><h1>'+albums[k].title+'</h1></span>');
          //jQuery('.album').append('<span style="display: inline-block;"><img src="'+photos[j].thumbnailUrl+'" class="slider-image-album albumimg'+photos[j].albumId+'" id="slider-menu-albumimg'+albums[j].id+'"><h1 style="font-size: 14px; width: 150px;">'+albums[j].title+'</h1><h1 style="font-size: 14px; width: 150px;">'+users[i].name+'</h1></span>');
          jQuery('.album > h1').after('<span style="display: inline-block;"><img src="'+photos[j].thumbnailUrl+'" class="slider-image-album albumimg'+photos[j].albumId+'" id="slider-menu-albumimg'+albums[j].id+'"><h1 style="font-size: 14px; width: 150px;">'+albums[j].title+'</h1></span>');
        //}
    }
  }
  }
}
  });
  }
  );
   }
   );
});*/

jQuery(function(){
  jQuery.getJSON("albums.json", function(albums) {
     jQuery.getJSON("photos.json", function(photos) {
      jQuery.getJSON("users.json", function(users) {
        for(var i=0; i<albums.length; i++){
        for(var j=0; j<60; j++){
        //for(var k=0; k<users.length; k++){
          if (albums[i].id==photos[j].albumId) {
          //if (albums[i].id==1) {
          //if (users[k].id==albums[i].userId) {
          jQuery('.album > .authorimg1').after('<span style="display: inline-block;"><img src="'+photos[j].thumbnailUrl+'" class="slider-image-album albumimg'+albums[i].id+'" id="slider-menu-albumimg'+albums[i].id+'"></span>');
        //}
        //}
        //}
          //if (albums[i].id==2) {
          //if (users[k].id==albums[i].userId) {
          jQuery('.album > .authorimg2').after('<span style="display: inline-block;"><img src="'+photos[j].thumbnailUrl+'" class="slider-image-album albumimg'+albums[i].id+'" id="slider-menu-albumimg'+albums[i].id+'"></span>');
        //}
        //}
        //}
          //if (albums[i].id==3) {
          //if (users[k].id==albums[i].userId) {
          jQuery('.album > .authorimg3').after('<span style="display: inline-block;"><img src="'+photos[j].thumbnailUrl+'" class="slider-image-album albumimg'+albums[i].id+'" id="slider-menu-albumimg'+albums[i].id+'"></span>');
        //}
        //}
        //}
          //if (albums[i].id==4) {
          //if (users[k].id==albums[i].userId) {
          jQuery('.album > .authorimg4').after('<span style="display: inline-block;"><img src="'+photos[j].thumbnailUrl+'" class="slider-image-album albumimg'+albums[i].id+'" id="slider-menu-albumimg'+albums[i].id+'"></span>');
        //}
        //}
        //}
          //if (albums[i].id==5) {
          //if (users[k].id==albums[i].userId) {
          jQuery('.album > .authorimg5').after('<span style="display: inline-block;"><img src="'+photos[j].thumbnailUrl+'" class="slider-image-album albumimg'+albums[i].id+'" id="slider-menu-albumimg'+albums[i].id+'"></span>');
        //}
        //}
        //}
        }
        }
        }

        /*for(var i=0; i<users.length; i++) {
          jQuery('.album').append('<h1 style="font-size: 14px; width: 150px;">'+users[i].name+'</h1>');
        }

        for(var i=0; i<60; i++){
        for(var j=0; j<60; j++){
        //for(var k=0; k<users.length; k++){
          if (albums[i].id==photos[j].albumId) {
          //if (users[k].id==albums[i].userId) {
          jQuery('.album > h1').after('<span style="display: inline-block;"><img src="'+photos[j].thumbnailUrl+'" class="slider-image-album albumimg'+photos[j].albumId+'" id="slider-menu-albumimg'+albums[i].id+'"></span>');
        //}
        //}
        }
        }
        }*/

        /*for(var i=0; i<20; i++){
        for(var j=0; j<20; j++){
        for(var k=0; k<users.length; k++){
          if (albums[i].id==photos[j].albumId) {
          if (users[k].id==albums[i].userId) {
          jQuery('.album > h1').after('<span style="display: inline-block;"><img src="'+photos[j].thumbnailUrl+'" class="slider-image-album albumimg'+photos[j].albumId+'" id="slider-menu-albumimg'+albums[i].id+'"></span>');
        }
        }
        }
        }
        }*/

        /*for(var i=0; i<users.length; i++) {
          for (var j=0; j<5; j++) {
          if (users[i].id==albums[j].userId) {
          jQuery('.album > span').after('<span style="display: inline-block;"><h1 style="font-size: 14px; width: 150px;">'+albums[j].title+'</h1></span>');
        }
        }
        }*/
    /*for(var i=0; i<album_limit; i++){
      for(var j=0; j<album_limit; j++){
        //for(var k=0; k<album_limit; k++){
          //if (albums[i].id==photos[j].albumId || users[k].id==albums[i].userId) {
          if (albums[i].id==photos[j].albumId) {
            if (users[i].id==albums[j].userId) {
          //jQuery('.album').append('<span><h1>'+users[k].name+'</h1><img src="'+photos[j].thumbnailUrl+'" class="slider-image-album" id="slider-menu-albumimg'+i+'"><h1>'+albums[k].title+'</h1></span>');
          //jQuery('.album').append('<span style="display: inline-block;"><img src="'+photos[j].thumbnailUrl+'" class="slider-image-album albumimg'+photos[j].albumId+'" id="slider-menu-albumimg'+albums[j].id+'"><h1 style="font-size: 14px; width: 150px;">'+albums[j].title+'</h1><h1 style="font-size: 14px; width: 150px;">'+users[i].name+'</h1></span>');
          jQuery('.album > h1').after('<span style="display: inline-block;"><img src="'+photos[j].thumbnailUrl+'" class="slider-image-album albumimg'+photos[j].albumId+'" id="slider-menu-albumimg'+albums[j].id+'"><h1 style="font-size: 14px; width: 150px;">'+albums[j].title+'</h1></span>');
        //}
    }
  }
  }
}*/
  });
  }
  );
   }
   );
});

jQuery(function(){
    jQuery.getJSON("albums.json", function(albums) {
      jQuery.getJSON("photos.json", function(photos) {
    for(var i=0; i<albums.length; i++){
      for(var j=0; j<limit; j++){
        if (albums[i].id==photos[j].albumId) {
        jQuery('.slider-menu').append('<div class="slider-image"><img src="'+photos[j].url+'" class="slider-menu-img albumimg'+photos[j].albumId+'" id="slider-image-albumimg'+photos[j].id+'"><div class="slide-name">'+photos[j].title+'</div></div>');
    }
    }
    }
  }
  );
  });
});

jQuery(function(){
  jQuery.getJSON("photos.json", function(photos) {
    for(var i=0; i<limit; i++){
      jQuery('.jspPane').append('<div class="slider-thumbnails" tabindex="0"><img src="'+photos[i].url+'" class="slider-menu-thumbnails" id="slider-image-thumbnails'+photos[i].id+'"></div>');
    }
  });
});

/*jQuery(function(){
  jQuery.getJSON("photos.json", function(photos) {
    for(var i=0; i<limit; i++){
      jQuery('.slider-menu').append('<div class="slider-image"><img src="'+photos[i].url+'" class="slider-menu-img" id="slider-image-albumimg'+i+'"><div class="slide-name">'+photos[i].title+'</div></div>');
    }
  });
});

jQuery(function(){
  jQuery.getJSON("photos.json", function(photos) {
    for(var i=0; i<limit; i++){
      jQuery('.jspPane').append('<div class="slider-thumbnails" tabindex="0"><img src="'+photos[i].url+'" class="slider-menu-thumbnails" id="slider-image-thumbnails'+i+'"></div>');
    }
  });
});*/

const e = React.createElement;

class LikeButton extends React.Component {
  constructor(props) {
    super(props);
    this.state = { liked: false };
  }
  render() {
    if (this.state.liked) {
      return 'You liked this.';
    }

    return e(
    'button',
    { onClick: () => this.setState({ liked: true }) },
    'Like'
    );
  }
}

document.querySelectorAll('.like_button_container').forEach(domContainer => {
  ReactDOM.render(e(LikeButton), domContainer);
}
);

jQuery(".album").click(function() {
    jQuery(".slider-menu-image").toggleClass("modal-image");
    jQuery(".arrowprev").toggleClass("arrowprev-close");
    jQuery(".arrownext").toggleClass("arrownext-close");
    jQuery(".modal-show").toggleClass("modal-image");
    jQuery(".thumbnails").toggleClass("close");
    jQuery("#albumize-t-window").toggleClass("close");
    jQuery(".albumize-close").toggleClass("close");
    jQuery(".albumize-t-slider-thumbnails").toggleClass("close");
}
);

jQuery(".modal-show").click(function() {
    jQuery(".slider-menu-image").toggleClass("modal-image");
    jQuery(".arrowprev").toggleClass("arrowprev-close");
    jQuery(".arrownext").toggleClass("arrownext-close");
    jQuery(".modal-show").toggleClass("modal-image");
    jQuery(".thumbnails").toggleClass("close");
    jQuery("#albumize-t-window").toggleClass("close");
    jQuery(".albumize-close").toggleClass("close");
    jQuery(".albumize-t-slider-thumbnails").toggleClass("close");
}
);

jQuery(".albumize-close").click(function() {
    jQuery(".slider-menu-image").toggleClass("modal-image");
    jQuery(".arrowprev").toggleClass("arrowprev-close");
    jQuery(".arrownext").toggleClass("arrownext-close");
    jQuery(".modal-show").toggleClass("modal-image");
    jQuery(".thumbnails").toggleClass("close");
    jQuery("#albumize-t-window").toggleClass("close");
    jQuery(".albumize-close").toggleClass("close");
    jQuery(".albumize-t-slider-thumbnails").toggleClass("close");
}
);

jQuery(".albumize-t-slider").click(function() {
    jQuery(".albumize-t-window").toggleClass("albumize-t-window-text");
    jQuery(".albumize-t-slider").toggleClass("albumize-t-slider-text");
}
);

jQuery(".albumize-t-slider-thumbnails").click(function() {
    jQuery(".thumbnails").toggleClass("albumize-t-slider-thumbnails-text");
}
);

window.addEventListener("load", function() {
var i=0;
var a=0;
/*jQuery(".slider-image-album").each(function() {
  i++;
  //for (var i=0; i<100; i++) {
  jQuery(this).attr("id", "slider-image-albumimg"+i);
  //}
}
);*/

//jQuery(".slider-image-album").each(function() {
//i++;
//for (var i=0; i<100; i++) {
jQuery(document).on("click", ".slider-image-album", function() {
/*var id=jQuery(this).attr("id").replace(/slider-menu-albumimg/, '');
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
currentSlide=id-1;
jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);*/
}
);

jQuery(document).on("click", ".albumimg1", function() {
var id=jQuery(this).attr("class").replace(/albumimg/, '');
var currentSlide=jQuery(".slider-menu").attr("class").replace(/albumimg/, '');
currentSlide=id;
//var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
//currentSlide=id-1;
//var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
//jQuery(".albumimg1").css({"display": "block"});
//jQuery(".albumimg2").css({"display": "none"});
//jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
//var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
//currentSlide=0;
jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
}
);

jQuery(document).on("click", ".albumimg2", function() {
/*var id=jQuery(this).attr("id").replace(/slider-menu-albumimg/, '');
//var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
//currentSlide=id-1;
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
currentSlide=id-1;*/
//jQuery(".albumimg1").css({"display": "none"});
//jQuery(".albumimg2").css({"display": "block"});
//jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
currentSlide=51;
jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
}
);

jQuery(document).on("click", ".albumimg3", function() {
/*var id=jQuery(this).attr("id").replace(/slider-menu-albumimg/, '');
//var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
//currentSlide=id-1;
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
currentSlide=id-1;*/
//jQuery(".albumimg1").css({"display": "none"});
//jQuery(".albumimg2").css({"display": "block"});
//jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
currentSlide=101;
jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
}
);

jQuery(document).on("click", ".albumimg4", function() {
/*var id=jQuery(this).attr("id").replace(/slider-menu-albumimg/, '');
//var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
//currentSlide=id-1;
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
currentSlide=id-1;*/
//jQuery(".albumimg1").css({"display": "none"});
//jQuery(".albumimg2").css({"display": "block"});
//jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
currentSlide=151;
jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
}
);

jQuery(document).on("click", ".albumimg5", function() {
/*var id=jQuery(this).attr("id").replace(/slider-menu-albumimg/, '');
//var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
//currentSlide=id-1;
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
currentSlide=id-1;*/
//jQuery(".albumimg1").css({"display": "none"});
//jQuery(".albumimg2").css({"display": "block"});
//jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
currentSlide=201;
jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
}
);

jQuery(document).on("click", ".slider-menu-thumbnails", function() {
var id=jQuery(this).attr("id").replace(/slider-image-thumbnails/, '');
var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
currentSlide=id-1;
//jQuery(this).toggleClass("slider-thumbnails-active");
jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
}
);

/*jQuery(".slider-menu-img").each(function() {
  a++;
  //for (var i=0; i<100; i++) {
  jQuery(this).attr("id", "slider-menu-albumimg"+a);
  //}
}
);*/
//}
//}
//);
//var slideWidth = 800;  //Ширина одного слайда
var slideWidth = 1920;
var slideWidthimg = 150;
var slideTimer;        //Интервал смены кадров

/*функция, сменяющая слайды каждую секунду*/
function nextSlide(){
    var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
    //var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
    currentSlide++;  //увеличиваем его значение
    //currentSlideimg++;
    /*if(currentSlide>=$('.slider1').children().length) //перематываем к началу, если слайд последний
    {
        currentSlide=0;   
    }*/
    if(currentSlide==limit) //перематываем к началу, если слайд последний
    {
        currentSlide=0;   
    }

    /*if(currentSlideimg==limit) //перематываем к началу, если слайд последний
    {
        currentSlide=0;   
    }*/
    /*передвигаем список и сохраняем значение текущего слайда*/
    jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
    //jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
}



jQuery(".arrowprev").click(function() {
    var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
    var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
    currentSlideimg=currentSlide;
    currentSlide--;  //увеличиваем его значение
    currentSlideimg--;
    /*if(currentSlide>=$('.slider1').children().length) //перематываем к началу, если слайд последний
    {
        currentSlide=0;   
    }*/
    if(currentSlide<0) //перематываем к началу, если слайд последний
    {
        currentSlide=limit-1;
        currentSlideimg=limit-1;
    }

    /*if(currentSlide<0) //перематываем к началу, если слайд последний
    {
        currentSlideimg=limit-1;   
    }*/
    /*передвигаем список и сохраняем значение текущего слайда*/
    jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
    jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
}
);

jQuery(".arrownext").click(function() {
    var currentSlide=parseInt(jQuery('.slider-menu').data('current'));  //определяем текущий слайд
    var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
    currentSlideimg=currentSlide;
    //var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
    currentSlide++;  //увеличиваем его значение
    currentSlideimg++;
    //currentSlideimg++;
    /*if(currentSlide>=$('.slider1').children().length) //перематываем к началу, если слайд последний
    {
        currentSlide=0;   
    }*/
    if(currentSlide==limit) //перематываем к началу, если слайд последний
    {
        currentSlide=0;
        currentSlideimg=0;
    }

    /*if(currentSlide==limit) //перематываем к началу, если слайд последний
    {
        currentSlideimg=0;   
    }*/

    /*if(currentSlideimg==limit) //перематываем к началу, если слайд последний
    {
        currentSlideimg=0;   
    }*/
    /*передвигаем список и сохраняем значение текущего слайда*/
    //currentSlideimg.css({"border": "2px solid red"});
    jQuery('.slider-menu').animate({left: -currentSlide*slideWidth}, 500).data('current',currentSlide);
    jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
}
);


jQuery(".arrowprev-thumbnails").click(function() {
    var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
    currentSlideimg--;
    /*if(currentSlide>=$('.slider1').children().length) //перематываем к началу, если слайд последний
    {
        currentSlide=0;   
    }*/
    if(currentSlideimg<0) //перематываем к началу, если слайд последний
    {
        currentSlideimg=limit-10;   
    }
    /*передвигаем список и сохраняем значение текущего слайда*/
    jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
}
);

jQuery(".arrownext-thumbnails").click(function() {
    var currentSlideimg=parseInt(jQuery('.jspPane').data('current'));
    currentSlideimg++;
    /*if(currentSlide>=$('.slider1').children().length) //перематываем к началу, если слайд последний
    {
        currentSlide=0;   
    }*/
    if(currentSlideimg==limit) //перематываем к началу, если слайд последний
    {
        currentSlideimg=0;   
    }
    /*передвигаем список и сохраняем значение текущего слайда*/
    jQuery('.jspPane').animate({left: -currentSlideimg*slideWidthimg}, 500).data('current',currentSlideimg);
}
);

/*setInterval(function() {
  jQuery(".arrownext").trigger("click");
}, 2000
);*/

}
);
</script>

<style>
body {
  background: #03a9f4;
}

.slider-menu-image {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
}

.slider {
  position: fixed;
  /*top: 20%;*/
  top: 0px;
  /*position: relative;
  overflow-x: hidden;
  max-width: 250px;
  z-index: 10000;
  cursor: pointer;*/
  overflow: hidden;
  background: transparent;
  /*width: 800px;*/
  width: 1920px;
  /*height: 500px;*/
  height: 1080px;
  /*transform: translate(0px, 30%);*/
  z-index: 10000;
}

.slide-name {
  font-size: 20px;
  color: black;
  padding-top: 20px;
  padding-bottom: 20px;
  text-align: center;
}

.slider-menu {
  position: relative;
  display: flex;
}

.slider-image {
  /*position: absolute;
  background: url(https://images.unsplash.com/photo-1449034446853-66c86144b0ad?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80);
  background-size: cover;
  background-repeat: no-repeat;
  margin-right: 50px;*/
}

.sliderimg {
  width: 250px;
}

.slider-menu-img {
  /*width: 800px;
  height: 500px;*/
  width: 1920px;
  height: 1080px;
}

.arrowprev {
  /*position: absolute;*/
  position: fixed;
  top: 50%;
  left: 0px;
  border: transparent;
  border-top: 50px solid transparent;
  border-bottom: 50px solid transparent;
  border-left: 50px solid transparent;
  border-right: 50px solid red;
  z-index: 10000;
  cursor: pointer;
}

.arrownext {
  /*position: absolute;*/
  position: fixed;
  top: 50%;
  right: 0px;
  border: transparent;
  border-top: 50px solid transparent;
  border-bottom: 50px solid transparent;
  border-left: 50px solid red;
  border-right: 50px solid transparent;
  z-index: 10000;
  cursor: pointer;
}

.sliderarrowprev {
  position: absolute;
  top: 30px;
  left: 100px;
  border: transparent;
  border-top: 50px solid transparent;
  border-bottom: 50px solid transparent;
  border-left: 50px solid transparent;
  border-right: 50px solid red;
  z-index: 10000;
  cursor: pointer;
  display: none;
}

.sliderarrownext {
  position: absolute;
  top: 30px;
  right: 150px;
  border: transparent;
  border-top: 50px solid transparent;
  border-bottom: 50px solid transparent;
  border-left: 50px solid red;
  border-right: 50px solid transparent;
  z-index: 10000;
  cursor: pointer;
  display: none;
}

.arrowprev-close {
  display: none;
}

.arrownext-close {
  display: none;
}

.slider-image-album {
  /*position: absolute;
  width: 250px;
  display: flex;*/
  margin-right: 20px;
  cursor: pointer;
}

.slider-album-img {
  /*width: 250px;*/
}

.modal-image {
   display: none;
}

.modal-show {
   position: fixed;
   top: 0px;
   width: 100%;
   height: 100%;
   background: #8080806b;
   z-index: 1;
}

.album-slider-img {
   margin-right: 50px;
}

.thumbnails {
   background: #000;
   background: rgba(0, 0, 0, 0.8);
   height: 90px;
   left: 0;
   overflow: hidden;
   position: fixed;
   bottom: 0px;
   width: 100%;
   transition: 0.5s ease-out;
   transition-property: bottom;
   display: flex;
   justify-content: center;
   z-index: 100000;
}

.jspContainer {
   overflow: hidden;
   position: relative;
}

.jspPane {
   position: absolute;
   display: flex;
}

.thumbnails ul {
   margin: 0;
   padding: 0;
}

.thumbnails li {
   float: left;
   list-style: none;
   margin: 5px;
   padding: 0;
}

.thumbnails a {
   outline: none;
}

a {
   color: #F30;
   text-decoration: none;
}

.thumbnails img {
   width: 150px;
   cursor: pointer;
}

.close {
   display: none;
}

.albumize-t-window {
   position: fixed;
   top: 17%;
   left: 1%;
   width: 23%;
   height: 66%;
   -webkit-transition: left .3s ease-out;
   -moz-transition: left .3s ease-out;
   -o-transition: left .3s ease-out;
   transition: left .3s ease-out;
   z-index: 100000;
}

.albumize-t-window-text {
   position: fixed;
   top: 17%;
   left: -500px;
   width: 23%;
   height: 66%;
   -webkit-transition: left .3s ease-out;
   -moz-transition: left .3s ease-out;
   -o-transition: left .3s ease-out;
   transition: left .3s ease-out;
   transition: 0.5s ease-out;
   transition-property: left;
   z-index: 100000;
}

.albumize-t-slider {
   position: absolute;
   top: 40%;
   right: 0;
   width: 25%;
   height: 13%;
   float: right;
   border: thin solid #111;
   background-color: #a9a9a9;
   background-image: url("https://www.jqueryscript.net/demo/jQuery-Album-Like-Image-Gallery-Plugin-Albumize/img/1.png");
   background-repeat: no-repeat;
   background-position: 45% 45%;
   font-size: 2.5em;
   font-weight: 700;
   color: #111;
   text-align: center;
   opacity: .9;
   filter: alpha(opacity=90);
   cursor: pointer;
   -webkit-border-radius: 7px;
   -moz-border-radius: 7px;
   border-radius: 7px;
}

.albumize-t-slider-text {
   position: absolute;
   left: 500px;
   top: 30%;
   right: 0;
   width: 25%;
   height: 13%;
   float: right;
   border: thin solid #111;
   background-color: #a9a9a9;
   background-image: url("https://www.jqueryscript.net/demo/jQuery-Album-Like-Image-Gallery-Plugin-Albumize/img/1.png");
   background-repeat: no-repeat;
   background-position: 45% 45%;
   transition: 0.5s ease-out;
   transition-property: top;
   font-size: 2.5em;
   font-weight: 700;
   color: #111;
   text-align: center;
   opacity: .9;
   filter: alpha(opacity=90);
   cursor: pointer;
   -webkit-border-radius: 7px;
   -moz-border-radius: 7px;
   border-radius: 7px;
}

.albumize-t-pane {
   position: absolute;
   top: 0;
   left: 0;
   width: 73%;
   height: 100%;
   border: thin solid #090909;
   background-color: #333;
   float: left;
   -webkit-border-radius: 10px;
   -moz-border-radius: 10px;
   border-radius: 10px;
}

.albumize-t-header {
   height: 4%;
}

.albumize-t-body {
   height: 94%;
   overflow-y: auto;
}

.albumize-thumb {
   width: 90%;
   height: 29%;
   margin: 5%;
   display: block;
   cursor: pointer;
}

.icon-remove:before {
   content: "\f00d";
}

.albumize-close {
   position: fixed;
   top: 100px;
   right: 100px;
   padding: 0;
   background: 0 0;
   border: 0;
   -webkit-appearance: none;
   float: right;
   font-size: 44px;
   font-weight: 700;
   color: white;
   text-shadow: 0 1px 0 #fff;
   opacity: .9;
   filter: alpha(opacity=90);
   cursor: pointer;
   z-index: 10000;
}

.albumize-t-slider-thumbnails {
   position: fixed;
   left: 50px;
   bottom: 20px;
   width: 100px;
   height: 50px;
   float: right;
   border: thin solid #111;
   background-color: #a9a9a9;
   background-image: url("https://www.jqueryscript.net/demo/jQuery-Album-Like-Image-Gallery-Plugin-Albumize/img/1.png");
   background-repeat: no-repeat;
   background-position: 45% 45%;
   font-size: 2.5em;
   font-weight: 700;
   color: #111;
   text-align: center;
   opacity: .9;
   filter: alpha(opacity=90);
   cursor: pointer;
   -webkit-border-radius: 7px;
   -moz-border-radius: 7px;
   border-radius: 7px;
   z-index: 100000;
}

.albumize-t-slider-thumbnails-text {
   background: #000;
   background: rgba(0, 0, 0, 0.8);
   height: 90px;
   left: 0;
   overflow: hidden;
   position: fixed;
   bottom: -200px;
   transition: 0.5s ease-out;
   transition-property: bottom;
   width: 100%;
   z-index: 100000;
}

.arrowprev-thumbnails {
    /* position: absolute; */
    position: absolute;
    top: 20px;
    left: 130px;
    border: transparent;
    border-top: 30px solid transparent;
    border-bottom: 30px solid transparent;
    border-left: 30px solid transparent;
    border-right: 30px solid red;
    z-index: 10000;
    cursor: pointer;
}

.arrownext-thumbnails {
    /* position: absolute; */
    position: absolute;
    top: 20px;
    right: 130px;
    border: transparent;
    border-top: 30px solid transparent;
    border-bottom: 30px solid transparent;
    border-left: 30px solid red;
    border-right: 30px solid transparent;
    z-index: 10000;
    cursor: pointer;
}

.slider-thumbnails:focus {
  border: 2px solid red;
}
</style>-->