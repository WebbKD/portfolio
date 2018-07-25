var createPostBtn = document.querySelector('#createPostBtn'),
    xhr = new XMLHttpRequest;
console.log(createPostBtn);

createPostBtn.addEventListener("click",function(){
    let token = document.querySelector('[name=csrf-token]').getAttribute('content');
    let url = '/storePost';
    console.log(token);
  
    
    let title = document.querySelector('#title').value; 
    let category = document.querySelector('#category').value;
    let link = document.querySelector("#sitelink").value;
    let img = document.querySelector('#postImg').value;
    
    console.log(title, category, link, img);
    fetch(url,{
        headers:{
            "Content-Type": "application/json",
            "Accept": "application/json, text/plain, *//*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        credentials: "same-origin",
        body: JSON.stringify({
            title: title,
            siteLink: link,
            categoryID: category,
            postImg: img
        })
    });
    
});

