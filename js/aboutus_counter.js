var a = setInterval(counter, 100);
var room = 1;
var res = 1;
var staff = 1;
var ame = 1;

function counter() {
    let html = '';
    if(room <= 100) {
        html = room
        document.querySelector('#room').innerHTML = html;
        room++;
    }
    else {
        clearInterval(a);
    }
        
    if(res <=3) {
        document.querySelector('#restaurant').innerHTML = res;
        res++;
    }

    if(staff <=55) {
        document.querySelector('#staffs').innerHTML = staff;
        staff++;
    }

    if(ame <=12) {
        document.querySelector('#amenities').innerHTML = ame;
        ame++;
    }
}
