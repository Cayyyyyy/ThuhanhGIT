var navbar_toggle = document.getElementById("navbar");
	navbar_toggle.onclick = function() {
		navbar_toggle.classList.toggle("open");
		var x = document.getElementById("myMenu");
				x.classList.toggle("reponsive");
	}


var y = document.getElementById("icon");
      y.onclick= function() {
        var y = document.getElementById("myMenu");
            y.classList.toggle("reponsive");
        var z = document.getElementById("navbar");
            z.classList.remove("open");
}

var h = document.getElementById("search-icon");
	h.onclick = function() {
		var g = document.getElementById("search-content");
			g.classList.toggle("show");
	}

var i = document.querySelectorAll('li.join')
var g = document.querySelectorAll('div.table')
console.log(g)

i.forEach((item,id) => {
  item.addEventListener('click', ()=> {
    if(!item.classList.contains('active')) {
      item.classList.add('active')
      g.forEach((list,j) => {
        if(j==id) {
          list.classList.add('show_diem')
        }
        else {
          list.classList.remove('show_diem')
        }
      })
    }
    i.forEach(otherItem => {
      if(otherItem !==item) {
        otherItem.classList.remove('active')
      }
    })
	document.getElementById('show_diem').style.display = "flex"
  })
})

let off = document.querySelectorAll('.off i')

off.forEach((item,id) => {
	item.addEventListener('click', () => {
		g.forEach((list,j) => {
			if(j==id) {
				list.classList.remove('show_diem')
			}
		})

		i.forEach((items,k) => {
			if(k==id) {
				items.classList.remove('active')
			}
		})
		document.getElementById('show_diem').style.display="none";
	})
})

