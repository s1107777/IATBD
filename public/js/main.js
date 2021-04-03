let checkbox_konijn = document.getElementById('konijn');
let checkbox_hond = document.getElementById('hond');
let list_of_huisdier = document.getElementsByTagName('li');

checkbox_konijn.checked = true;
checkbox_hond.checked = true;


checkbox_konijn.addEventListener('change', function(){
    if(checkbox_konijn.checked){
        for(let i=0; i < list_of_huisdier.length; i++){
            console.log(list_of_huisdier[i]);
            if(list_of_huisdier[i].dataset.soortHuisdier == 'konijn'){
                list_of_huisdier[i].style.display = '';
            }
            else{
                if(list_of_huisdier[i].dataset.soortHuisdier == 'konijn'){
                    list_of_huisdier[i].style.display = 'none';
                }
            }
        }
    }else{
        for(let i=0; i < list_of_huisdier.length; i++){
            if(list_of_huisdier[i].dataset.soortHuisdier == 'konijn'){
                list_of_huisdier[i].style.display = 'none';
            }
        }
    }
});

checkbox_hond.addEventListener('change', function(){
    if(checkbox_hond.checked){
        for(let i=0; i < list_of_huisdier.length; i++){
            if(list_of_huisdier[i].dataset.soortHuisdier == 'hond'){
                list_of_huisdier[i].style.display = '';
            }
            else{
                if(list_of_huisdier[i].dataset.soortHuisdier == 'hond'){
                    list_of_huisdier[i].style.display = 'none';
                }
            }
        }
    }else{
        for(let i=0; i < list_of_huisdier.length; i++){
            if(list_of_huisdier[i].dataset.soortHuisdier == 'hond'){
                list_of_huisdier[i].style.display = 'none';
            }
        }
    }
});

