﻿(function(g,f,b,e,c,d,q){/*! Jssor */
$Jssor$=g.$Jssor$=g.$Jssor$||{};new(function(){});var m=function(){var b=this,a={};b.$On=b.addEventListener=function(b,c){if(typeof c!="function")return;if(!a[b])a[b]=[];a[b].push(c)};b.$Off=b.removeEventListener=function(e,d){var b=a[e];if(typeof d!="function")return;else if(!b)return;for(var c=0;c<b.length;c++)if(d==b[c]){b.splice(c,1);return}};b.g=function(e){var c=a[e],d=[];if(!c)return;for(var b=1;b<arguments.length;b++)d.push(arguments[b]);for(var b=0;b<c.length;b++)try{c[b].apply(g,d)}catch(f){}}},h;(function(){h=function(a,b){this.x=typeof a=="number"?a:0;this.y=typeof b=="number"?b:0};})();var l=g.$JssorEasing$={$EaseLinear:function(a){return a},$EaseGoBack:function(a){return 1-b.abs(2-1)},$EaseSwing:function(a){return-b.cos(a*b.PI)/2+.5},$EaseInQuad:function(a){return a*a},$EaseOutQuad:function(a){return-a*(a-2)},$EaseInOutQuad:function(a){return(a*=2)<1?1/2*a*a:-1/2*(--a*(a-2)-1)},$EaseInCubic:function(a){return a*a*a},$EaseOutCubic:function(a){return(a-=1)*a*a+1},$EaseInOutCubic:function(a){return(a*=2)<1?1/2*a*a*a:1/2*((a-=2)*a*a+2)},$EaseInQuart:function(a){return a*a*a*a},$EaseOutQuart:function(a){return-((a-=1)*a*a*a-1)},$EaseInOutQuart:function(a){return(a*=2)<1?1/2*a*a*a*a:-1/2*((a-=2)*a*a*a-2)},$EaseInQuint:function(a){return a*a*a*a*a},$EaseOutQuint:function(a){return(a-=1)*a*a*a*a+1},$EaseInOutQuint:function(a){return(a*=2)<1?1/2*a*a*a*a*a:1/2*((a-=2)*a*a*a*a+2)},$EaseInSine:function(a){return 1-b.cos(a*b.PI/2)},$EaseOutSine:function(a){return b.sin(a*b.PI/2)},$EaseInOutSine:function(a){return-1/2*(b.cos(b.PI*a)-1)},$EaseInExpo:function(a){return a==0?0:b.pow(2,10*(a-1))},$EaseOutExpo:function(a){return a==1?1:-b.pow(2,-10*a)+1},$EaseInOutExpo:function(a){return a==0||a==1?a:(a*=2)<1?1/2*b.pow(2,10*(a-1)):1/2*(-b.pow(2,-10*--a)+2)},$EaseInCirc:function(a){return-(b.sqrt(1-a*a)-1)},$EaseOutCirc:function(a){return b.sqrt(1-(a-=1)*a)},$EaseInOutCirc:function(a){return(a*=2)<1?-1/2*(b.sqrt(1-a*a)-1):1/2*(b.sqrt(1-(a-=2)*a)+1)},$EaseInElastic:function(a){if(!a||a==1)return a;var c=.3,d=.075;return-(b.pow(2,10*(a-=1))*b.sin((a-d)*2*b.PI/c))},$EaseOutElastic:function(a){if(!a||a==1)return a;var c=.3,d=.075;return b.pow(2,-10*a)*b.sin((a-d)*2*b.PI/c)+1},$EaseInOutElastic:function(a){if(!a||a==1)return a;var c=.45,d=.1125;return(a*=2)<1?-.5*b.pow(2,10*(a-=1))*b.sin((a-d)*2*b.PI/c):b.pow(2,-10*(a-=1))*b.sin((a-d)*2*b.PI/c)*.5+1},$EaseInBack:function(a){var b=1.70158;return a*a*((b+1)*a-b)},$EaseOutBack:function(a){var b=1.70158;return(a-=1)*a*((b+1)*a+b)+1},$EaseInOutBack:function(a){var b=1.70158;return(a*=2)<1?1/2*a*a*(((b*=1.525)+1)*a-b):1/2*((a-=2)*a*(((b*=1.525)+1)*a+b)+2)},$EaseInBounce:function(a){return 1-l.$EaseOutBounce(1-a)},$EaseOutBounce:function(a){return a<1/2.75?7.5625*a*a:a<2/2.75?7.5625*(a-=1.5/2.75)*a+.75:a<2.5/2.75?7.5625*(a-=2.25/2.75)*a+.9375:7.5625*(a-=2.625/2.75)*a+.984375},$EaseInOutBounce:function(a){return a<1/2?l.$EaseInBounce(a*2)*.5:l.$EaseOutBounce(a*2-1)*.5+.5},$EaseInWave:function(a){return 1-b.cos(a*b.PI*2)},$EaseOutWave:function(a){return b.sin(a*b.PI*2)},$EaseOutJump:function(a){return 1-((a*=2)<1?(a=1-a)*a*a:(a-=1)*a*a)},$EaseInJump:function(a){return(a*=2)<1?a*a*a:(a=2-a)*a*a}},i={Ce:function(a){return(a&3)==1},He:function(a){return(a&3)==2},Ge:function(a){return(a&12)==4},Fe:function(a){return(a&12)==8}},r={Le:37,De:39},o,n={Me:0,Ne:1,Ie:2,Je:3,Ke:4,Be:5},z=1,v=2,x=3,w=4,y=5,j,a=new function(){var i=this,m=n.Me,j=0,s=0,T=0,B=0,fb=navigator.appName,k=navigator.userAgent;function F(){if(!m)if(fb=="Microsoft Internet Explorer"&&!!g.attachEvent&&!!g.ActiveXObject){var d=k.indexOf("MSIE");m=n.Ne;s=parseFloat(k.substring(d+5,k.indexOf(";",d)));/*@cc_on T=@_jscript_version@*/;j=f.documentMode||s}else if(fb=="Netscape"&&!!g.addEventListener){var c=k.indexOf("Firefox"),a=k.indexOf("Safari"),h=k.indexOf("Chrome"),b=k.indexOf("AppleWebKit");if(c>=0){m=n.Ie;j=parseFloat(k.substring(c+8))}else if(a>=0){var i=k.substring(0,a).lastIndexOf("/");m=h>=0?n.Ke:n.Je;j=parseFloat(k.substring(i+1,a))}if(b>=0)B=parseFloat(k.substring(b+12))}else{var e=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(k);if(e){m=n.Be;j=parseFloat(e[2])}}}function r(){F();return m==z}function I(){return r()&&(j<6||f.compatMode=="BackCompat")}function Z(){F();return m==v}function O(){F();return m==x}function lb(){F();return m==w}function nb(){F();return m==y}function V(){return O()&&B>534&&B<535}function A(){return r()&&j<9}var D;function t(a){if(!D){p(["transform","WebkitTransform","msTransform","MozTransform","OTransform"],function(b){if(!i.Bb(a.style[b])){D=b;return c}});D=D||"transform"}return D}function db(a){return Object.prototype.toString.call(a)}var L;function p(a,c){if(db(a)=="[object Array]"){for(var b=0;b<a.length;b++)if(c(a[b],b,a))break}else for(var d in a)if(c(a[d],d,a))break}function ob(){if(!L){L={};p(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){L["[object "+a+"]"]=a.toLowerCase()})}return L}function C(a){return a==e?String(a):ob()[db(a)]||"object"}function eb(b,a){setTimeout(b,a||0)}function K(b,d,c){var a=!b||b=="inherit"?"":b;p(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.lastIndex+1,a.length-(b.lastIndex+1));a=d+e}});a=c+(a.indexOf(" ")!=0?" ":"")+a;return a}function ab(b,a){if(j<9)b.style.filter=a}function ib(b,a,c){if(T<9){var e=b.style.filter,g=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),f=a?"progid:DXImageTransform.Microsoft.Matrix(M11="+a[0][0]+", M12="+a[0][1]+", M21="+a[1][0]+", M22="+a[1][1]+", SizingMethod='auto expand')":"",d=K(e,[g],f);ab(b,d);i.ic(b,c.y);i.hc(b,c.x)}}i.Ib=r;i.Cb=lb;i.Jb=nb;i.xb=A;i.Z=function(){return j};i.nc=function(){return B};i.$Delay=eb;i.O=function(a){if(i.oc(a))a=f.getElementById(a);return a};i.mb=function(a){return a?a:g.event};i.pe=function(a){a=i.mb(a);return a.target||a.srcElement||f};i.pc=function(a){a=i.mb(a);var b=new h;if(a.type=="DOMMouseScroll"&&Z()&&j<3){b.x=a.screenX;b.y=a.screenY}else if(typeof a.pageX=="number"){b.x=a.pageX;b.y=a.pageY}else if(typeof a.clientX=="number"){b.x=a.clientX+f.body.scrollLeft+f.documentElement.scrollLeft;b.y=a.clientY+f.body.scrollTop+f.documentElement.scrollTop}return b};function G(c,d,a){if(a!=q)c.style[d]=a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&g.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,e);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function Q(b,c,a,d){if(a!=q){d&&(a+="px");G(b,c,a)}else return parseFloat(G(b,c))}function l(d,a){var b=a&2,c=a?Q:G;return function(e,a){return c(e,d,a,b)}}function kb(b){if(r()&&s<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?parseFloat(a[1])/100:1}else return parseFloat(b.style.opacity||"1")}function mb(c,a,f){if(r()&&s<9){var h=c.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=b.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=K(h,[i],d);ab(c,g)}else c.style.opacity=a==1?"":b.round(a*100)/100}function S(g,c){var f=c.$Rotate||0,d=c.$Scale||1;if(A()){var k=i.qe(f/180*b.PI,d,d);ib(g,!f&&d==1?e:k,i.re(k,c.db,c.eb))}else{var h=t(g);if(h){var j="rotate("+f%360+"deg) scale("+d+")";if(a.Cb()&&B>535)j+=" perspective(2000px)";g.style[h]=j}}}i.ye=function(b,a){if(V())eb(i.r(e,S,b,a));else S(b,a)};i.ze=function(b,c){var a=t(b);if(a)b.style[a+"Origin"]=c};i.Ae=function(a,c){if(r()&&s<9||s<10&&I())a.style.zoom=c==1?"":c;else{var b=t(a);if(b){var f="scale("+c+")",e=a.style[b],g=new RegExp(/[\s]*scale\(.*?\)/g),d=K(e,[g],f);a.style[b]=d}}};i.ve=function(a){if(!a.style[t(a)]||a.style[t(a)]=="none")a.style[t(a)]="perspective(2000px)"};i.h=function(a,c,d,b){a=i.O(a);if(a.addEventListener){c=="mousewheel"&&a.addEventListener("DOMMouseScroll",d,b);a.addEventListener(c,d,b)}else if(a.attachEvent){a.attachEvent("on"+c,d);b&&a.setCapture&&a.setCapture()}};i.we=function(a,c,d,b){a=i.O(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};i.xe=function(b,a){i.h(A()?f:g,"mouseup",b,a)};i.X=function(a){a=i.mb(a);a.preventDefault&&a.preventDefault();a.cancel=c;a.returnValue=d};i.r=function(e,d){for(var b=[],a=2;a<arguments.length;a++)b.push(arguments[a]);var c=function(){for(var c=b.concat([]),a=0;a<arguments.length;a++)c.push(arguments[a]);return d.apply(e,c)};return c};i.Oe=function(a,c){var b=f.createTextNode(c);i.lc(a);a.appendChild(b)};i.lc=function(a){a.innerHTML=""};i.cb=function(c){for(var b=[],a=c.firstChild;a;a=a.nextSibling)a.nodeType==1&&b.push(a);return b};function R(a,c,b,f){if(!b)b="u";for(a=a?a.firstChild:e;a;a=a.nextSibling)if(a.nodeType==1){if(i.w(a,b)==c)return a;if(f){var d=R(a,c,b,f);if(d)return d}}}i.p=R;function W(a,c,d){for(a=a?a.firstChild:e;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(d){var b=W(a,c,d);if(b)return b}}}i.Ue=W;i.Te=function(b,a){return b.getElementsByTagName(a)};i.i=function(c){for(var b=1;b<arguments.length;b++){var a=arguments[b];if(a)for(var d in a)c[d]=a[d]}return c};i.Bb=function(a){return C(a)=="undefined"};i.Se=function(a){return C(a)=="function"};i.Tb=Array.isArray||function(a){return C(a)=="array"};i.oc=function(a){return C(a)=="string"};i.Qe=function(a){return!isNaN(parseFloat(a))&&isFinite(a)};i.c=p;i.yb=function(a){return i.sc("DIV",a)};i.Ve=function(a){return i.sc("SPAN",a)};i.sc=function(b,a){a=a||f;return a.createElement(b)};i.T=function(){};i.Rb=function(a,b){return a.getAttribute(b)};i.w=function(a,b){return i.Rb(a,b)||i.Rb(a,"data-"+b)};i.Pe=function(b,c,a){b.setAttribute(c,a)};i.fc=function(a){return a.className};i.jc=function(b,a){b.className=a||""};i.G=function(a){return a.parentNode};i.C=function(a){i.M(a,"none")};i.o=function(a,b){i.M(a,b==d?"none":"")};i.ec=function(b,a){b.removeAttribute(a)};i.Re=function(){return r()&&j<10};i.oe=function(d,c){if(c)d.style.clip="rect("+b.round(c.$Top)+"px "+b.round(c.$Right)+"px "+b.round(c.$Bottom)+"px "+b.round(c.$Left)+"px)";else{var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=K(g,f,"");a.Sb(d,e)}};i.y=function(){return+new Date};i.u=function(b,a){b.appendChild(a)};i.rb=function(c,b,a){c.insertBefore(b,a)};i.jb=function(b,a){b.removeChild(a)};i.wd=function(b,a){p(a,function(a){i.jb(b,a)})};i.vd=function(a){i.wd(a,i.cb(a))};i.Wc=function(b,a){return parseInt(b,a||10)};i.rc=function(a){return parseFloat(a)};i.tc=function(b,a){var c=f.body;while(a&&b!=a&&c!=a)try{a=a.parentNode}catch(e){return d}return b==a};i.v=function(b,a){return b.cloneNode(a)};function N(b,a,c){a.onload=e;a.abort=e;b&&b(a,c)}i.hb=function(d,b){if(i.Jb()&&j<11.6||!d)N(b,e);else{var a=new Image;a.onload=i.r(e,N,b,a);a.onabort=i.r(e,N,b,a,c);a.src=d}};i.fd=function(e,b,f){var d=e.length+1;function c(a){d--;if(b&&a&&a.src==b.src)b=a;!d&&f&&f(b)}a.c(e,function(b){a.hb(b.src,c)});c()};i.uc=function(d,k,j,i){if(i)d=a.v(d,c);for(var h=a.Te(d,k),f=h.length-1;f>-1;f--){var b=h[f],e=a.v(j,c);a.jc(e,a.fc(b));a.Sb(e,b.style.cssText);var g=a.G(b);a.rb(g,e,b);a.jb(g,b)}return d};var E;function qb(b){var g=this,h,e,j;function f(){var c=h;if(e)c+="dn";else if(j)c+="av";a.jc(b,c)}function k(){E.push(g);e=c;f()}g.hd=function(){e=d;f()};g.qc=function(a){j=a;f()};b=i.O(b);if(!E){i.xe(function(){var a=E;E=[];p(a,function(a){a.hd()})});E=[]}h=i.fc(b);a.h(b,"mousedown",k)}i.wb=function(a){return new qb(a)};i.mc=G;i.W=l("overflow");i.Sb=l("cssText");i.l=l("top",2);i.k=l("left",2);i.e=l("width",2);i.f=l("height",2);i.hc=l("marginLeft",2);i.ic=l("marginTop",2);i.x=l("position");i.M=l("display");i.z=l("zIndex",1);i.bc=function(b,a,c){if(a!=q)mb(b,a,c);else return kb(b)};var P={$Opacity:i.bc,$Top:i.l,$Left:i.k,dc:i.e,cc:i.f,gb:i.x,eg:i.M,$ZIndex:i.z},u;function J(){if(!u)u=i.i({dg:i.ic,cg:i.hc,$Clip:i.oe,lb:i.ye},P);return u}function Y(){J();u.lb=u.lb;return u}i.Kd=J;i.Cd=Y;i.Bd=function(c,b){J();var a={};p(b,function(d,b){if(P[b])a[b]=P[b](c)});return a};i.I=function(c,b){var a=J();p(b,function(d,b){a[b]&&a[b](c,d)})};o=new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.ob=function(d,c){var a=b(d,[[c.x],[c.y]]);return new h(a[0][0],a[1][0])}};i.qe=function(d,a,c){var e=b.cos(d),f=b.sin(d);return[[e*a,-f*c],[f*a,e*c]]};i.re=function(d,c,a){var e=o.ob(d,new h(-c/2,-a/2)),f=o.ob(d,new h(c/2,-a/2)),g=o.ob(d,new h(c/2,a/2)),i=o.ob(d,new h(-c/2,a/2));return new h(b.min(e.x,f.x,g.x,i.x)+c/2,b.min(e.y,f.y,g.y,i.y)+a/2)}};j=function(n,m,g,O,z,x){n=n||0;var f=this,r,o,p,y,A=0,C,M,L,D,j=0,t=0,E,k=n,i,h,q,u=[],B;function I(b){i+=b;h+=b;k+=b;j+=b;t+=b;a.c(u,function(a){a,a.$Shift(b)})}function N(a,b){var c=a-i+n*b;I(c);return h}function w(w,G){var n=w;if(q&&(n>=h||n<=i))n=((n-i)%q+q)%q+i;if(!E||y||G||j!=n){var p=b.min(n,h);p=b.max(p,i);if(!E||y||G||p!=t){if(x){var d=x;if(z){var s=(p-k)/(m||1);if(g.Ud&&a.Cb()&&m)s=b.round(s*m/16)/m*16;if(g.$Reverse)s=1-s;d={};for(var o in x){var R=M[o]||1,J=L[o]||[0,1],l=(s-J[0])/J[1];l=b.min(b.max(l,0),1);l=l*R;var H=b.floor(l);if(l!=H)l-=H;var Q=C[o]||C.S,I=Q(l),r,K=z[o],F=x[o];if(a.Qe(F))r=K+(F-K)*I;else{r=a.i({E:{}},z[o]);a.c(F.E,function(c,b){var a=c*I;r.E[b]=a;r[b]+=a})}d[o]=r}}if(z.$Zoom)d.lb={$Rotate:d.$Rotate||0,$Scale:d.$Zoom,db:g.db,eb:g.eb};if(x.$Clip&&g.$Move){var v=d.$Clip.E,D=(v.$Top||0)+(v.$Bottom||0),A=(v.$Left||0)+(v.$Right||0);d.$Left=(d.$Left||0)+A;d.$Top=(d.$Top||0)+D;d.$Clip.$Left-=A;d.$Clip.$Right-=A;d.$Clip.$Top-=D;d.$Clip.$Bottom-=D}if(d.$Clip&&a.Re()&&!d.$Clip.$Top&&!d.$Clip.$Left&&d.$Clip.$Right==g.db&&d.$Clip.$Bottom==g.eb)d.$Clip=e;a.c(d,function(b,a){B[a]&&B[a](O,b)})}f.Eb(t-k,p-k)}t=p;a.c(u,function(b,c){var a=w<j?u[u.length-c-1]:b;a.B(w,G)});var P=j,N=w;j=n;E=c;f.qb(P,N)}}function F(a,c){c&&a.tb(h,1);h=b.max(h,a.H());u.push(a)}function H(){if(r){var d=a.y(),e=b.min(d-A,a.Jb()?80:20),c=j+e*p;A=d;if(c*p>=o*p)c=o;w(c);if(!y&&c*p>=o*p)J(D);else a.$Delay(H,g.$Interval)}}function v(d,e,g){if(!r){r=c;y=g;D=e;d=b.max(d,i);d=b.min(d,h);o=d;p=o<j?-1:1;f.kc();A=a.y();H()}}function J(a){if(r){y=r=D=d;f.Tc();a&&a()}}f.$Play=function(a,b,c){v(a?j+a:h,b,c)};f.Rc=function(b,a,c){v(b,a,c)};f.J=function(){J()};f.nd=function(a){v(a)};f.L=function(){return j};f.Sc=function(){return o};f.ub=function(){return t};f.B=w;f.Ab=function(){w(i,c)};f.$Move=function(a){w(j+a)};f.$IsPlaying=function(){return r};f.Ad=function(a){q=a};f.tb=N;f.$Shift=I;f.N=function(a){F(a,0)};f.Db=function(a){F(a,1)};f.H=function(){return h};f.qb=a.T;f.kc=a.T;f.Tc=a.T;f.Eb=a.T;f.Hb=a.y();g=a.i({$Interval:15},g);q=g.Qc;B=a.i({},a.Kd(),g.Nc);i=k=n;h=n+m;var M=g.$Round||{},L=g.$During||{};C=a.i({S:a.Se(g.$Easing)&&g.$Easing||l.$EaseSwing},g.$Easing)};var s;new function(){;function n(o,dc){var i=this;function yc(){var a=this;j.call(a,-1e8,2e8);a.Md=function(){var c=a.ub(),d=b.floor(c),f=u(d),e=c-b.floor(c);return{F:f,Nd:d,gb:e}};a.qb=function(d,a){var e=b.floor(a);if(e!=a&&a>d)e++;Qb(e,c);i.g(n.$EVT_POSITION_CHANGE,u(a),u(d),a,d)}}function xc(){var b=this;j.call(b,0,0,{Qc:s});a.c(C,function(a){T&1&&a.Ad(s);b.Db(a);a.$Shift(hb/Yb)})}function wc(){var a=this,b=Pb.$Elmt;j.call(a,-1,2,{$Easing:l.$EaseLinear,Nc:{gb:Wb},Qc:s},b,{gb:1},{gb:-1});a.zb=b}function lc(o,m){var a=this,f,g,h,l,b;j.call(a,-1e8,2e8);a.kc=function(){Q=c;V=e;i.g(n.$EVT_SWIPE_START,u(y.L()),y.L())};a.Tc=function(){Q=d;l=d;var a=y.Md();i.g(n.$EVT_SWIPE_END,u(y.L()),y.L());!a.gb&&Ac(a.Nd,q)};a.qb=function(d,c){var a;if(l)a=b;else{a=g;if(h)a=k.$SlideEasing(c/h)*(g-f)+f}y.B(a)};a.nb=function(b,d,c,e){f=b;g=d;h=c;y.B(b);a.B(0);a.Rc(c,e)};a.Ld=function(d){l=c;b=d;a.$Play(d,e,c)};a.Dd=function(a){b=a};y=new yc;y.N(o);y.N(m)}function mc(){var c=this,b=Vb();a.z(b,0);c.$Elmt=b;c.kb=function(){a.C(b);a.lc(b)}}function vc(p,o){var f=this,t,w,K,y,g,z=[],T,r,X,I,P,F,l,v,h;j.call(f,-x,x+1,{});function E(a){w&&w.Yb();t&&t.Yb();W(p,a);F=c;t=new M.$Class(p,M,1);w=new M.$Class(p,M);w.Ab();t.Ab()}function Z(){t.Hb<M.Hb&&E()}function L(o,q,m){if(!I){I=c;if(g&&m){var e=m.width,b=m.height,l=e,j=b;if(e&&b&&k.$FillMode){if(k.$FillMode&3&&(!(k.$FillMode&4)||e>J||b>H)){var h=d,p=J/H*b/e;if(k.$FillMode&1)h=p>1;else if(k.$FillMode&2)h=p<1;l=h?e*H/b:J;j=h?H:b*J/e}a.e(g,l);a.f(g,j);a.l(g,(H-j)/2);a.k(g,(J-l)/2)}a.x(g,"absolute");i.g(n.$EVT_LOAD_END,bc)}}a.C(q);o&&o(f)}function Y(b,c,d,e){if(e==V&&q==o&&R)if(!zc){var a=u(b);A.Od(a,o,c,f,d);c.Fd();ab.tb(a,1);ab.B(a);B.nb(b,b,0)}}function cb(b){if(b==V&&q==o){if(!l){var a=e;if(A)if(A.F==o)a=A.Pd();else A.kb();Z();l=new tc(o,a,f.Jd(),f.Hd());l.Bc(h)}!l.$IsPlaying()&&l.Wb()}}function Q(d,c){if(d==o){if(d!=c)C[c]&&C[c].he();h&&h.$Enable();var j=V=a.y();f.hb(a.r(e,cb,j))}else{var i=b.abs(o-d),g=x+k.$LazyLoading;(!P||i<=g||s-i<=g)&&f.hb()}}function fb(){if(q==o&&l){l.J();h&&h.$Quit();h&&h.$Disable();l.Ec()}}function gb(){q==o&&l&&l.J()}function O(b){if(U)a.X(b);else i.g(n.$EVT_CLICK,o,b)}function N(){h=v.pInstance;l&&l.Bc(h)}f.hb=function(d,b){b=b||y;if(z.length&&!I){a.o(b);if(!X){X=c;i.g(n.$EVT_LOAD_START);a.c(z,function(b){if(!b.src){b.src=a.w(b,"src2");a.M(b,b["display-origin"])}})}a.fd(z,g,a.r(e,L,d,b))}else L(d,b)};f.ke=function(){if(A){var b=A.Id(s);if(b){var f=V=a.y(),c=o+1*Ub,d=C[u(c)];return d.hb(a.r(e,Y,c,d,b,f),y)}}bb(q+k.$AutoPlaySteps*Ub)};f.Vb=function(){Q(o,o)};f.he=function(){h&&h.$Quit();h&&h.$Disable();f.Dc();l&&l.ee();l=e;E()};f.Fd=function(){a.C(p)};f.Dc=function(){a.o(p)};f.Xd=function(){h&&h.$Enable()};function W(b,f,e){if(b["jssor-slider"]||a.Rb(b,"u")=="thumb")return;e=e||0;if(!F){if(b.tagName=="IMG"){z.push(b);if(!b.src){P=c;b["display-origin"]=a.M(b);a.C(b)}}a.xb()&&a.z(b,(a.z(b)||0)+1);if(k.$HWA&&a.nc()>0)(!G||a.nc()<534||!eb)&&a.ve(b)}var h=a.cb(b);a.c(h,function(h){var j=a.w(h,"u");if(j=="player"&&!v){v=h;if(v.pInstance)N();else a.h(v,"dataavailable",N)}if(j=="caption"){if(!a.Ib()&&!f){var i=a.v(h,c);a.rb(b,i,h);a.jb(b,h);h=i;f=c}}else if(!F&&!e&&!g&&a.w(h,"u")=="image"){g=h;if(g){if(g.tagName=="A"){T=g;a.I(T,S);r=a.v(g,d);a.h(r,"click",O);a.I(r,S);a.M(r,"block");a.bc(r,0);a.mc(r,"backgroundColor","#000");g=a.Ue(g,"IMG")}g.border=0;a.I(g,S)}}W(h,f,e+1)})}f.Eb=function(c,b){var a=x-b;Wb(K,a)};f.Jd=function(){return t};f.Hd=function(){return w};f.F=o;m.call(f);var D=a.p(p,"thumb");if(D){f.Vd=a.v(D,c);a.ec(D,"id");a.C(D)}a.o(p);y=a.v(db,c);a.z(y,1e3);a.h(p,"click",O);E(c);f.Cc=g;f.Ac=r;f.zb=K=p;a.u(K,y);i.$On(203,Q);i.$On(22,gb);i.$On(24,fb)}function tc(g,r,v,u){var b=this,m=0,x=0,o,h,e,f,l,s,w,t,p=C[g];j.call(b,0,0);function y(){a.vd(N);cc&&l&&p.Ac&&a.u(N,p.Ac);a.o(N,l||!p.Cc)}function z(){if(s){s=d;i.g(n.$EVT_ROLLBACK_END,g,e,m,h,e,f);b.B(h)}b.Wb()}function B(a){t=a;b.J();b.Wb()}b.Wb=function(){var a=b.ub();if(!I&&!Q&&!t&&q==g){if(!a){if(o&&!l){l=c;b.Ec(c);i.g(n.$EVT_SLIDESHOW_START,g,m,x,o,f)}y()}var d,k=n.$EVT_STATE_CHANGE;if(a!=f)if(a==e)d=f;else if(a==h)d=e;else if(!a)d=h;else if(a>e){s=c;d=e;k=n.$EVT_ROLLBACK_START}else d=b.Sc();i.g(k,g,a,m,h,e,f);var j=R&&(!Sb||Z);if(a==f)j&&p.ke();else(j||a!=e)&&b.Rc(d,z)}};b.ee=function(){A&&A.F==g&&A.kb();var a=b.ub();a<f&&i.g(n.$EVT_STATE_CHANGE,g,-a-1,m,h,e,f)};b.Ec=function(b){r&&a.W(jb,b&&r.bb.$Outside?"":"hidden")};b.Eb=function(b,a){if(l&&a>=o){l=d;y();p.Dc();A.kb();i.g(n.$EVT_SLIDESHOW_END,g,m,x,o,f)}i.g(n.$EVT_PROGRESS_CHANGE,g,a,m,h,e,f)};b.Bc=function(a){if(a&&!w){w=a;a.$On($JssorPlayer$.Zc,B)}};r&&b.Db(r);o=b.H();b.H();b.Db(v);h=v.H();e=h+k.$AutoPlayInterval;u.$Shift(e);b.N(u);f=b.H()}function Wb(c,g){var f=w>0?w:ib,d=b.round(zb*g*(f&1)),e=b.round(Ab*g*(f>>1&1));if(a.Ib()&&a.Z()>=10&&a.Z()<11)c.style.msTransform="translate("+d+"px, "+e+"px)";else if(a.Cb()&&a.Z()>=30&&a.Z()<34){c.style.WebkitTransition="transform 0s";c.style.WebkitTransform="translate3d("+d+"px, "+e+"px, 0px) perspective(2000px)"}else{a.k(c,d);a.l(c,e)}}function rc(c){U=0;var b=a.pe(c).tagName;!K&&b!="INPUT"&&b!="TEXTAREA"&&pc()&&qc(c)}function qc(b){pb=Q;I=c;yb=d;V=e;a.h(f,nb,Zb);a.y();Hb=B.Sc();B.J();if(!pb)w=0;if(G){var h=b.touches[0];tb=h.clientX;ub=h.clientY}else{var g=a.pc(b);tb=g.x;ub=g.y;a.X(b)}E=0;cb=0;gb=0;D=y.L();i.g(n.$EVT_DRAG_START,u(D),D,b)}function Zb(e){if(I&&(!a.xb()||e.button)){var f;if(G){var m=e.touches;if(m&&m.length>0)f=new h(m[0].clientX,m[0].clientY)}else f=a.pc(e);if(f){var k=f.x-tb,l=f.y-ub;if(b.floor(D)!=D)w=w||ib&K;if((k||l)&&!w){if(K==3)if(b.abs(l)>b.abs(k))w=2;else w=1;else w=K;if(G&&w==1&&b.abs(l)-b.abs(k)>3)yb=c}if(w){var d=l,j=Ab;if(w==1){d=k;j=zb}if(!(T&1)){if(d>0){var g=j*q,i=d-g;if(i>0)d=g+b.sqrt(i)*5}if(d<0){var g=j*(s-x-q),i=-d-g;if(i>0)d=-g-b.sqrt(i)*5}}if(E-cb<-2)gb=1;else if(E-cb>2)gb=0;cb=E;E=d;rb=D-E/j/(mb||1);if(E&&w&&!yb){a.X(e);if(!Q)B.Ld(rb);else B.Dd(rb)}else a.xb()&&a.X(e)}}}else Db(e)}function Db(h){nc();if(I){I=d;a.y();a.we(f,nb,Zb);U=E;U&&a.X(h);B.J();var e=y.L();i.g(n.$EVT_DRAG_END,u(e),e,u(D),D,h);var c=b.floor(D);if(b.abs(E)>=k.$MinDragOffsetToSlide){c=b.floor(e);c+=gb}if(!(T&1))c=b.min(s-x,b.max(c,0));var g=b.abs(c-e);g=1-b.pow(1-g,5);if(!U&&pb)B.nd(Hb);else if(e==c){sb.Xd();sb.Vb()}else B.nb(e,c,g*Rb)}}function kc(a){C[q];q=u(a);sb=C[q];Qb(a);return q}function Ac(a,b){w=0;kc(a);i.g(n.$EVT_PARK,u(a),b)}function Qb(b,c){wb=b;a.c(P,function(a){a.Kb(u(b),b,c)})}function pc(){var b=n.yc||0,a=O;if(G)a&1&&(a&=1);n.yc|=a;return K=a&~b}function nc(){if(K){n.yc&=~O;K=0}}function Vb(){var b=a.yb();a.I(b,S);a.x(b,"absolute");return b}function u(a){return(a%s+s)%s}function hc(a,c){if(c)if(!T){a=b.min(b.max(a+wb,0),s-1);c=d}else if(T&2){a=u(a+wb);c=d}bb(a,k.$SlideDuration,c)}function xb(){a.c(P,function(a){a.Zb(a.vb.$ChanceToShow>Z)})}function fc(b){b=a.mb(b);var c=b.target?b.target:b.srcElement,d=b.relatedTarget?b.relatedTarget:b.toElement;if(!a.tc(o,c)||a.tc(o,d))return;Z=1;xb();C[q].Vb()}function ec(){Z=0;xb()}function gc(){S={dc:J,cc:H,$Top:0,$Left:0};a.c(X,function(b){a.I(b,S);a.x(b,"absolute");a.W(b,"hidden");a.C(b)});a.I(db,S)}function kb(b,a){bb(b,a,c)}function bb(h,g,l){if(Nb&&(!I||k.$NaviQuitDrag)){Q=c;I=d;B.J();if(a.Bb(g))g=Rb;var f=Eb.ub(),e=h;if(l){e=f+h;if(h>0)e=b.ceil(e);else e=b.floor(e)}if(!(T&1)){e=u(e);e=b.max(0,b.min(e,s-x))}var j=(e-f)%s;e=f+j;var i=f==e?0:g*b.abs(j);i=b.min(i,g*x*1.5);B.nb(f,e,i||1)}}i.$PlayTo=bb;i.$GoTo=function(a){bb(a,1)};i.$Next=function(){kb(1)};i.$Prev=function(){kb(-1)};i.$Pause=function(){R=d};i.$Play=function(){if(!R){R=c;C[q]&&C[q].Vb()}};i.$SetSlideshowTransitions=function(a){k.$SlideshowOptions.$Transitions=a};i.$SetCaptionTransitions=function(b){M.$CaptionTransitions=b;M.Hb=a.y()};i.$SlidesCount=function(){return X.length};i.$CurrentIndex=function(){return q};i.$IsAutoPlaying=function(){return R};i.$IsDragging=function(){return I};i.$IsSliding=function(){return Q};i.$IsMouseOver=function(){return!Z};i.$LastDragSucceded=function(){return U};i.$GetOriginalWidth=function(){return a.e(v||o)};i.$GetOriginalHeight=function(){return a.f(v||o)};i.$GetScaleWidth=function(){return a.e(o)};i.$GetScaleHeight=function(){return a.f(o)};i.$SetScaleWidth=function(c){if(!v){var b=a.v(o,d);a.ec(b,"id");a.x(b,"relative");a.l(b,0);a.k(b,0);a.W(b,"visible");v=a.v(o,d);a.ec(v,"id");a.Sb(v,"");a.x(v,"absolute");a.l(v,0);a.k(v,0);a.e(v,a.e(o));a.f(v,a.f(o));a.ze(v,"0 0");a.u(v,b);var f=a.cb(o);a.u(o,v);var e={navigator:Y&&Y.$Scale==d,arrowleft:L&&L.$Scale==d,arrowright:L&&L.$Scale==d,thumbnavigator:F&&F.$Scale==d,thumbwrapper:F&&F.$Scale==d};a.c(f,function(c){a.u(e[a.w(c,"u")]?o:b,c)});a.o(b);a.o(v)}mb=c/a.e(v);a.Ae(v,mb);a.e(o,c);a.f(o,mb*a.f(v));a.c(P,function(a){a.Ub()})};i.Jc=function(a){var d=b.ceil(u(hb/Yb)),c=u(a-q+d);if(c>x){if(a-q>s/2)a-=s;else if(a-q<=-s/2)a+=s}else a=q+c-d;return a};m.call(this);i.$Elmt=o=a.O(o);var k=a.i({$FillMode:0,$LazyLoading:1,$StartIndex:0,$AutoPlay:d,$Loop:1,$HWA:c,$NaviQuitDrag:c,$AutoPlaySteps:1,$AutoPlayInterval:3e3,$PauseOnHover:1,$SlideDuration:500,$SlideEasing:l.$EaseOutQuad,$MinDragOffsetToSlide:20,$SlideSpacing:0,$DisplayPieces:1,$ParkingPosition:0,$UISearchMode:1,$PlayOrientation:1,$DragOrientation:1},dc),ib=k.$PlayOrientation&3,Ub=(k.$PlayOrientation&4)/-4||1,fb=k.$SlideshowOptions,M=a.i({$Class:t,$PlayInMode:1,$PlayOutMode:1},k.$CaptionSliderOptions),Y=k.$BulletNavigatorOptions,L=k.$ArrowNavigatorOptions,F=k.$ThumbnailNavigatorOptions,W=k.$UISearchMode,v,z=a.p(o,"slides",e,W),db=a.p(o,"loading",e,W)||a.yb(f),Jb=a.p(o,"navigator",e,W),ac=a.p(o,"arrowleft",e,W),Xb=a.p(o,"arrowright",e,W),Gb=a.p(o,"thumbnavigator",e,W),jc=a.e(z),ic=a.f(z),S,X=[],sc=a.cb(z);a.c(sc,function(b){b.tagName=="DIV"&&!a.w(b,"u")&&X.push(b)});var q=-1,wb,sb,s=X.length,J=k.$SlideWidth||jc,H=k.$SlideHeight||ic,Tb=k.$SlideSpacing,zb=J+Tb,Ab=H+Tb,Yb=ib&1?zb:Ab,x=b.min(k.$DisplayPieces,s),jb,w,K,yb,G,P=[],Mb,Ob,Lb,cc,zc,R,Sb=k.$PauseOnHover,Rb=k.$SlideDuration,qb,eb,hb,Nb=x<s,T=Nb?k.$Loop:0,O,U,Z=1,Q,I,V,tb=0,ub=0,E,cb,gb,Eb,y,ab,B,Pb=new mc,mb;R=k.$AutoPlay;i.vb=dc;gc();o["jssor-slider"]=c;a.z(z,a.z(z)||0);a.x(z,"absolute");jb=a.v(z);a.rb(a.G(z),jb,z);if(fb){cc=fb.$ShowLink;qb=fb.$Class;eb=x==1&&s>1&&qb&&(!a.Ib()||a.Z()>=8)}hb=eb||x>=s||!(T&1)?0:k.$ParkingPosition;O=x>1||hb?ib:k.$DragOrientation;var vb=z,C=[],A,N,Cb="mousedown",nb="mousemove",Fb="mouseup",lb,D,pb,Hb,rb;if(g.navigator.msPointerEnabled){Cb="MSPointerDown";nb="MSPointerMove";Fb="MSPointerUp";lb="MSPointerCancel";if(O){var Bb="none";if(O==1)Bb="pan-y";else if(O==2)Bb="pan-x";a.Pe(vb.style,"-ms-touch-action",Bb)}}else if("ontouchstart"in g||"createTouch"in f){G=c;Cb="touchstart";nb="touchmove";Fb="touchend";lb="touchcancel"}ab=new wc;if(eb)A=new qb(Pb,J,H,fb,G);a.u(jb,ab.zb);a.W(z,"hidden");N=Vb();a.mc(N,"backgroundColor","#000");a.bc(N,0);a.rb(vb,N,vb.firstChild);for(var ob=0;ob<X.length;ob++){var uc=X[ob],bc=new vc(uc,ob);C.push(bc)}a.C(db);Eb=new xc;B=new lc(Eb,ab);if(O){a.h(z,Cb,rc);a.h(f,Fb,Db);lb&&a.h(f,lb,Db)}Sb&=G?2:1;if(Jb&&Y){Mb=new Y.$Class(Jb,Y);P.push(Mb)}if(L&&ac&&Xb){Ob=new L.$Class(ac,Xb,L);P.push(Ob)}if(Gb&&F){F.$StartIndex=k.$StartIndex;Lb=new F.$Class(Gb,F);P.push(Lb)}a.c(P,function(a){a.Mb(s,C,db);a.$On(p.sb,hc)});i.$SetScaleWidth(i.$GetOriginalWidth());a.h(o,"mouseout",fc);a.h(o,"mouseover",ec);xb();k.$ArrowKeyNavigation&&a.h(f,"keydown",function(a){if(a.keyCode==r.Le)kb(-1);else a.keyCode==r.De&&kb(1)});B.nb(k.$StartIndex,k.$StartIndex,0)}n.$EVT_CLICK=21;n.$EVT_DRAG_START=22;n.$EVT_DRAG_END=23;n.$EVT_SWIPE_START=24;n.$EVT_SWIPE_END=25;n.$EVT_LOAD_START=26;n.$EVT_LOAD_END=27;n.$EVT_POSITION_CHANGE=202;n.$EVT_PARK=203;n.$EVT_SLIDESHOW_START=206;n.$EVT_SLIDESHOW_END=207;n.$EVT_PROGRESS_CHANGE=208;n.$EVT_STATE_CHANGE=209;n.$EVT_ROLLBACK_START=210;n.$EVT_ROLLBACK_END=211;g.$JssorSlider$=s=n};var p={sb:1};g.$JssorBulletNavigator$=function(f,D){var h=this;m.call(h);f=a.O(f);var t,u,s,r,l=0,g,n,k,y,z,j,i,q,o,C=[],A=[];function x(a){a!=-1&&A[a].qc(a==l)}function v(a){h.g(p.sb,a*n)}h.$Elmt=f;h.Kb=function(a){if(a!=r){var d=l,c=b.floor(a/n);l=c;r=a;x(d);x(c)}};h.Zb=function(b){a.o(f,b)};var B;h.Ub=function(){if(!B||g.$Scale==d){g.$AutoCenter&1&&a.k(f,(a.e(a.G(f))-u)/2);g.$AutoCenter&2&&a.l(f,(a.f(a.G(f))-s)/2);B=c}};var w;h.Mb=function(D){if(!w){t=b.ceil(D/n);l=0;var p=q+y,r=o+z,m=b.ceil(t/k)-1;u=q+p*(!j?m:k-1);s=o+r*(j?m:k-1);a.e(f,u);a.f(f,s);for(var d=0;d<t;d++){var B=a.Ve();a.Oe(B,d+1);var h=a.uc(i,"NumberTemplate",B,c);a.x(h,"absolute");var x=d%(m+1);a.k(h,!j?p*x:d%k*p);a.l(h,j?r*x:b.floor(d/(m+1))*r);a.u(f,h);C[d]=h;g.$ActionMode&1&&a.h(h,"click",a.r(e,v,d));g.$ActionMode&2&&a.h(h,"mouseover",a.r(e,v,d));A[d]=a.wb(h)}w=c}};h.vb=g=a.i({$SpacingX:0,$SpacingY:0,$Orientation:1,$ActionMode:1},D);i=a.p(f,"prototype");q=a.e(i);o=a.f(i);a.jb(f,i);n=g.$Steps||1;k=g.$Lanes||1;y=g.$SpacingX;z=g.$SpacingY;j=g.$Orientation-1};g.$JssorArrowNavigator$=function(b,g,s){var f=this;m.call(f);var h,j,q=a.G(b),o=a.e(b),l=a.f(b);function k(a){f.g(p.sb,a,c)}f.Kb=function(b,a,c){if(c);};f.Zb=function(c){a.o(b,c);a.o(g,c)};var r;f.Ub=function(){if(!r||h.$Scale==d){var f=a.e(q),e=a.f(q);if(h.$AutoCenter&1){a.k(b,(f-o)/2);a.k(g,(f-o)/2)}if(h.$AutoCenter&2){a.l(b,(e-l)/2);a.l(g,(e-l)/2)}r=c}};var n;f.Mb=function(d){if(!n){a.h(b,"click",a.r(e,k,-j));a.h(g,"click",a.r(e,k,j));a.wb(b);a.wb(g);n=c}};f.vb=h=a.i({$Steps:1},s);j=h.$Steps};g.$JssorThumbnailNavigator$=function(i,A){var h=this,x,l,e,u=[],y,w,f,n,o,t,r,k,q,g,j;m.call(h);i=a.O(i);function z(n,d){var g=this,b,m,k;function o(){m.qc(l==d)}function i(){if(!q.$LastDragSucceded()){var a=(f-d%f)%f,b=q.Jc((d+a)/f),c=b*f-a;h.g(p.sb,c)}}g.F=d;g.Gc=o;k=n.Vd||n.Cc||a.yb();g.zb=b=a.uc(j,"ThumbnailTemplate",k,c);m=a.wb(b);e.$ActionMode&1&&a.h(b,"click",i);e.$ActionMode&2&&a.h(b,"mouseover",i)}h.Kb=function(c,d,e){var a=l;l=c;a!=-1&&u[a].Gc();u[c].Gc();!e&&q.$PlayTo(q.Jc(b.floor(d/f)))};h.Zb=function(b){a.o(i,b)};h.Ub=a.T;var v;h.Mb=function(F,D){if(!v){x=F;b.ceil(x/f);l=-1;k=b.min(k,D.length);var h=e.$Orientation&1,p=t+(t+n)*(f-1)*(1-h),m=r+(r+o)*(f-1)*h,C=p+(p+n)*(k-1)*h,A=m+(m+o)*(k-1)*(1-h);a.x(g,"absolute");a.W(g,"hidden");e.$AutoCenter&1&&a.k(g,(y-C)/2);e.$AutoCenter&2&&a.l(g,(w-A)/2);a.e(g,C);a.f(g,A);var j=[];a.c(D,function(l,e){var i=new z(l,e),d=i.zb,c=b.floor(e/f),k=e%f;a.k(d,(t+n)*k*(1-h));a.l(d,(r+o)*k*h);if(!j[c]){j[c]=a.yb();a.u(g,j[c])}a.u(j[c],d);u.push(i)});var E=a.i({$AutoPlay:d,$NaviQuitDrag:d,$SlideWidth:p,$SlideHeight:m,$SlideSpacing:n*h+o*(1-h),$MinDragOffsetToSlide:12,$SlideDuration:200,$PauseOnHover:1,$PlayOrientation:e.$Orientation,$DragOrientation:e.$DisableDrag?0:e.$Orientation},e);q=new s(i,E);v=c}};h.vb=e=a.i({$SpacingX:3,$SpacingY:3,$DisplayPieces:1,$Orientation:1,$AutoCenter:3,$ActionMode:1},A);y=a.e(i);w=a.f(i);g=a.p(i,"slides");j=a.p(g,"prototype");t=a.e(j);r=a.f(j);a.jb(g,j);f=e.$Lanes||1;n=e.$SpacingX;o=e.$SpacingY;k=e.$DisplayPieces};function t(){j.call(this,0,0);this.Yb=a.T}g.$JssorCaptionSlider$=function(p,k,g){var d=this,h,f=k.$CaptionTransitions,o={bb:"t",$Delay:"d",$Duration:"du",$ScaleHorizontal:"x",$ScaleVertical:"y",$Rotate:"r",$Zoom:"z",$Opacity:"f",R:"b"},e={S:function(b,a){if(!isNaN(a.Q))b=a.Q;else b*=a.pd;return b},$Opacity:function(b,a){return this.S(b-1,a)}};e.$Zoom=e.$Opacity;j.call(d,0,0);function m(r,n){var l=[],i,j=[],c=[];function h(c,d){var b={};a.c(o,function(g,h){var e=a.w(c,g+(d||""));if(e){var f={};if(g=="t")f.Q=e;else if(e.indexOf("%")+1)f.pd=a.rc(e)/100;else f.Q=a.rc(e);b[h]=f}});return b}function p(){return f[b.floor(b.random()*f.length)]}function d(g){var h;if(g=="*")h=p();else if(g){var e=f[a.Wc(g)]||f[g];if(a.Tb(e)){if(g!=i){i=g;c[g]=0;j[g]=e[b.floor(b.random()*e.length)]}else c[g]++;e=j[g];if(a.Tb(e)){e=e.length&&e[c[g]%e.length];if(a.Tb(e))e=e[b.floor(b.random()*e.length)]}}h=e;if(a.oc(h))h=d(h)}return h}var q=a.cb(r);a.c(q,function(b){var c=[];c.$Elmt=b;var f=a.w(b,"u")=="caption";a.c(g?[0,3]:[2],function(o,p){if(f){var l,i;if(o!=2||!a.w(b,"t3")){i=h(b,o);if(o==2&&!i.bb){i.$Delay=i.$Delay||{Q:0};i=a.i(h(b,0),i)}}if(i&&i.bb){l=d(i.bb.Q);if(l){var j=a.i({$Delay:0,$ScaleHorizontal:1,$ScaleVertical:1},l);a.c(i,function(c,a){var b=(e[a]||e.S).apply(e,[j[a],i[a]]);if(!isNaN(b))j[a]=b});if(!p)if(i.R)j.R=i.R.Q||0;else if((g?k.$PlayInMode:k.$PlayOutMode)&2)j.R=0}}c.push(j)}if(n%2&&!p)c.dd=m(b,n+1)});l.push(c)});return l}function n(E,d,F){var h={$Easing:d.$Easing,$Round:d.$Round,$During:d.$During,$Reverse:g&&!F,Ud:c},k=E,y=a.G(E),o=a.e(k),n=a.f(k),u=a.e(y),t=a.f(y),f={},l={},m=d.$ScaleClip||1;if(d.$Opacity)f.$Opacity=2-d.$Opacity;h.db=o;h.eb=n;if(d.$Zoom||d.$Rotate){f.$Zoom=d.$Zoom?d.$Zoom-1:1;if(a.xb()||a.Jb())f.$Zoom=b.min(f.$Zoom,2);l.$Zoom=1;var s=d.$Rotate||0;if(s==c)s=1;f.$Rotate=s*360;l.$Rotate=0}else if(d.$Clip){var z={$Top:0,$Right:o,$Bottom:n,$Left:0},D=a.i({},z),e=D.E={},C=d.$Clip&4,v=d.$Clip&8,A=d.$Clip&1,x=d.$Clip&2;if(C&&v){e.$Top=n/2*m;e.$Bottom=-e.$Top}else if(C)e.$Bottom=-n*m;else if(v)e.$Top=n*m;if(A&&x){e.$Left=o/2*m;e.$Right=-e.$Left}else if(A)e.$Right=-o*m;else if(x)e.$Left=o*m;h.$Move=d.$Move;f.$Clip=D;l.$Clip=z}var p=d.$FlyDirection,q=0,r=0,w=d.$ScaleHorizontal,B=d.$ScaleVertical;if(i.Ce(p))q-=u*w;else if(i.He(p))q+=u*w;if(i.Ge(p))r-=t*B;else if(i.Fe(p))r+=t*B;if(q||r||h.$Move){f.$Left=q+a.k(k);f.$Top=r+a.l(k)}var G=d.$Duration;l=a.i(l,a.Bd(k,f));h.Nc=a.Cd();return new j(d.$Delay,G,h,k,l,f)}function l(b,c){a.c(c,function(c){var f,i=c.$Elmt,e=c[0],j=c[1];if(e){f=n(i,e);b=f.tb(a.Bb(e.R)?b:e.R,1)}b=l(b,c.dd);if(j){var g=n(i,j,1);g.tb(b,1);d.N(g);h.N(g)}f&&d.N(f)});return b}d.Yb=function(){d.B(d.H()*(g||0));h.Ab()};h=new j(0,0);l(0,m(p,1))}})(window,document,Math,null,true,false)