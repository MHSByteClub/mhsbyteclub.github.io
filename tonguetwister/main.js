var button = document.getElementById("button");

//Note "words" is defined in other javascript file so, this main.js will give off the "words is not defined" 

button.click(function generate() {
    var number = random(0,26);
    var div = document.getElementById('tongue_twister');

    if(number<1){
        for(var forA=1; forA<8; forA++){
            div.innerHTML += (words.a[floor(random(0,words.a.length))]) + " ";
        }
    }
    else if(number<2){
        for(var forB=1; forB<8; forB++){
            div.innerHTML += (words.b[floor(random(0,words.b.length))]) + " ";
        }
    }
    else if(number<3){
        for(var forC=1; forC<8; forC++){
            div.innerHTML += (words.c[floor(random(0,words.c.length))]) + " ";
        }
    }else if(number<4){
        for(var forD=1; forD<8; forD++){
            div.innerHTML += (words.d[floor(random(0,words.d.length))]) + " ";
        }
    }else if(number<5){
        for(var forE=1; forE<8; forE++){
            div.innerHTML += (words.e[floor(random(0,words.e.length))]) + " ";
        }
    }else if(number<6){
        for(var forF=1; forF<8; forF++){
            div.innerHTML+ = (words.f[floor(random(0,words.f.length))]) + " ";
        }
    }else if(number<7){
        for(var forG=1; forG<8; forG++){
            div.innerHTML += (words.g[floor(random(0,words.g.length))]) + " ";
        }
    }else if(number<8){
        for(var forH=1; forH<8; forH++){
            div.innerHTML += (words.h[floor(random(0,words.h.length))]) + " ";
        }
    }else if(number<9){
        for(var forI=1; forI<8; forI++){
            div.innerHTML += (words.i[floor(random(0,words.i.length))]) + " ";
        }
    }else if(number<10){
        for(var forJ=1; forJ<8; forJ++){
            div.innerHTML += (words.j[floor(random(0,words.j.length))]) + " ";
        }
    }else if(number<11){
        for(var forK=1; forK<8; forK++){
            div.innerHTML += (words.k[floor(random(0,words.k.length))]) + " ";
        }
    }else if(number<12){
        for(var forL=1; forL<8; forL++){
            div.innerHTML += (words.l[floor(random(0,words.l.length))]) + " ";
        }
    }else if(number<13){
        for(var forM=1; forM<8; forM++){
            div.innerHTML += (words.m[floor(random(0,words.m.length))]) + " ";
        }
    }else if(number<14){
        for(var forN=1; forN<8; forN++){
            div.innerHTML += (words.n[floor(random(0,words.n.length))]) + " ";
        }
    }else if(number<15){
        for(var forO=1; forO<8; forO++){
            div.innerHTML += (words.o[floor(random(0,words.o.length))]) + " ";
        }
    }else if(number<16){
        for(var forP=1; forP<8; forP++){
            div.innerHTML += (words.p[floor(random(0,words.p.length))]) + " ";
        }
    }else if(number<17){
        for(var forQ=1; forQ<8; forQ++){
            div.innerHTML += (words.q[floor(random(0,words.q.length))]) + " ";
        }
    }else if(number<18){
        for(var forR=1; forR<8; forR++){
            div.innerHTML += (words.r[floor(random(0,words.r.length))]) + " ";
        }
    }else if(number<19){
        for(var forS=1; forS<8; forS++){
            div.innerHTML += (words.s[floor(random(0,words.s.length))]) + " ";
        }
    }else if(number<20){
        for(var forT=1; forT<8; forT++){
            div.innerHTML += (words.t[floor(random(0,words.t.length))]) + " ";
        }
    }else if(number<21){
        for(var forU=1; forU<8; forU++){
            div.innerHTML += (words.u[floor(random(0,words.u.length))]) + " ";
        }
    }else if(number<22){
        for(var forV=1; forV<8; forV++){
            div.innerHTML += (words.v[floor(random(0,words.v.length))]) + " ";
        }
    }else if(number<23){
        for(var forW=1; forW<8; forW++){
            div.innerHTML += (words.w[floor(random(0,words.w.length))]) + " ";
        }
    }else if(number<24){
        for(var forX=1; forX<8; forX++){
            div.innerHTML += (words.x[floor(random(0,words.x.length))]) + " ";
        }
    }else if(number<25){
        for(var forY=1; forY<8; forY++){
            div.innerHTML += (words.y[floor(random(0,words.y.length))]) + " ";
        }
    }else {
        for(var forZ=1; forZ<8; forZ++){
            div.innerHTML += (words.z[floor(random(0,words.z.length))]) + " ";
        }
    }*/
});
