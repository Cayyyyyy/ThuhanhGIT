let body = document.querySelector("body");

let a = document.getElementById('toggle_btn');
let b = document.getElementById('mobile_btn');
let c = document.getElementById('user-menu')

a.onclick = function() {
	body.classList.toggle('mini-sidebar')
}

b.onclick = function() {
	document.getElementById('container').classList.toggle('slide-nav')
}

c.onclick = function() {
  document.getElementById('drop-menu').classList.toggle('show')
}

window.addEventListener("resize", function() {
  if (window.innerWidth <= 991) {
  	body.classList.remove("mini-sidebar");
  }
  if(window.innerWidth >= 992) {
  	document.getElementById('container').classList.remove("slide-nav");
  }
});


let d = document.querySelectorAll('li.submenu')
let e = document.querySelectorAll('div.content')

d.forEach((item,i) => {
  item.addEventListener('click', ()=> {
    if(!item.classList.contains('active')) {
      item.classList.add('active')
      e.forEach((list,j) => {
        if(j==i) {
          list.classList.add('showcontent')
        }
        else {
          list.classList.remove('showcontent')
        }
      })
    }
    d.forEach(otherItem => {
      if(otherItem !==item) {
        otherItem.classList.remove('active')
      }
    })
  })
})
