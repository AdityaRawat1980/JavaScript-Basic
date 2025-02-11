let str = " aditya_rawat ";
for(let i=0;i<=(str.length)-1;i++){
    console.log(str[i]);
}
console.log("\n\t");
for(a of str){
    console.log(a);
}
let b = str.toUpperCase()
console.log(b);
let c = str.toLowerCase();
console.log(c);
let d = str.trim();
console.log(d);
let e = str.slice(0,5);
console.log(e);
str = str.concat(" is a good boy");
console.log(str);
let g = str.replace("boy","Man");
console.log(g);
let h = str.charAt(5);
console.log(h);