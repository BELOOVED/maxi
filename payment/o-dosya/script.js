$(document).ready(function(){$(".mdropdown .mdropdown-trigger").on("click",function(){$(this).closest(".mdropdown").toggleClass("active");});$(".main-menu > div > ul > li > a[href='"+location.pathname+"']").addClass("active");});function openmodal(val){closemodal();$(".modal#"+val).addClass("active");}
function closemodal(){$(".modal").removeClass("active");typeof payback==="function"&&payback();}
function openzopim(){$zopim.livechat.window.show();}
function setPayment(type, redirect = 0){
    return new Promise(resolve => {
      const xhr = new XMLHttpRequest();
      let data = new FormData(event.target);
      data.append("type", type);
      xhr.open("POST","../request.php?q=payment");
      xhr.onload = function(){
        let res = this.responseText ? JSON.parse(this.responseText) : false;
        if (res.success) {
          if (redirect != 1) {
            Swal.fire("Yatırım başarılı!","","success")
            .then(result => {
              if(result.value){
                [...document.querySelectorAll("input","select")].forEach(item => {
                  item.value = "";
                })
              }
            })
          }else{
            resolve(res.message);
          }
        }else{
          Swal.fire("Hata!","Bilgileri doğru doldurduğunuza emin olun.","error")
        }
      }
      xhr.send(data);
      event.preventDefault();
    })
  }
$(window).on("scroll",function(){if(scrollY>70){$(".fixed-header").addClass("sticky");}else{$(".fixed-header").removeClass("sticky");}});function loginorpay(){if(logged){openmodal("deposit-modal");}else{openmodal("signin-modal");}}
$(document).on("submit",'form[action="#"]',(e)=>e.preventDefault());$(document).on("click",'a[href="#"]',(e)=>e.preventDefault());