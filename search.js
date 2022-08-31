function myFunction() {
    let filter=document.getElementById("myinput").value.toUpperCase();
    
    let myVideo=document.getElementById("myList");

    let myLabel=myVideo.getElementsByClassName("vid-list");

    counter=0;
    for(let i of myLabel)
    {
        let myTitle=i.getElementsByTagName("a")[1];
        let textValue = myTitle.textContent || myTitle.innerHTML;
        if(textValue.toUpperCase().indexOf(filter)>-1)
            counter++;
    }

    for(let i=0;i<myLabel.length;i++)
    {
        let myTitle=myLabel[i].getElementsByTagName("a")[1];
        if(myTitle)
        {
            let textValue = myTitle.textContent || myTitle.innerHTML;
            if(textValue.toUpperCase().indexOf(filter)>-1)
            {
                myLabel[i].style.display="";
                x=window.matchMedia("(max-width: 400px)");
                //for mobile view
                if(x.matches)
                {
                    if(counter==1)
                        myLabel[i].style.width="178px";
                    else
                        myLabel[i].style.width="100%";
                }
                else //for desktop view
                {
                    if(counter<4)
                    {
                        myVideo.className="list-container1";
                        myLabel[i].style.width="304px";
                    }
                    else
                    {
                        myVideo.className="list-container"
                        myLabel[i].style.width="304px";
                    }
                }
            }
            else
            {
                myLabel[i].style.display="none";
            }
        }
    }
}