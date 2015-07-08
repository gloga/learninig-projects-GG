/**
 * Created by Gabriel on 22.5.2015..
 */
var arg = process.argv;
var sum=0;
for (var i=2;i<arg.length;i++){
    sum+=Number(arg[i]);
}
console.log(sum);