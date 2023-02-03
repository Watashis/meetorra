const generate = ()=>{
    var content = $('.content');
    var last = false;
    for (let i = 0; i < 20; i++) {
        let div = $('<div>');
        if(last){
            div.text('Element without ID ').attr('data-noprint',true);
            last=false;
        }else{
            div.text(`The element with ID ${i}`).attr('data-ID',i);    
            last=true;
        }
        div.appendTo(content);
    }
}
const getElements=()=>{
    let allElements = $("[data-ID]");
    allElements.toArray().forEach(element => {
        console.log(element)
    });

}
generate();
getElements();
alert('Open a console and write getElements()')
console.info('Write getElements()');

$('button').click(e=>{
    let btn = $('button');
    let text = $('.btns>span');
    let divs = $("[data-noprint='true']");
    if(divs.css('display')=='none'){
        divs.css('display','block')
        text.text(text.text().replace('hidden','shown'))
        btn.text('Hide?')
    }else{
        divs.css('display','')
        text.text(text.text().replace('shown','hidden'))
        btn.text('Show')
    }
});