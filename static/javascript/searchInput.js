
const technologyList = $('.technology-div')

$('#search-input').on('input', (e)=>{
    
    let searchValue = $('#search-input').val().trim().toLowerCase();
    
    $('.technology-div').each((index)=>{
        let element = $('.technology-div').eq(index);
        (element.text().trim().toLowerCase().startsWith(searchValue)) ? element.show() : element.hide()
    })
    


    console.log(searchValue)
})