let num = prompt("Enter the no");
num2 = Math.floor(Math.random()*10)+1;
console.log(num2);
while(num !== num2){
    if(num == num2){
        console.log("You won");
        break;
    }
    else{
         num = prompt("Enter the another no");
    }
}
