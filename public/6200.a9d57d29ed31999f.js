"use strict";(self.webpackChunkapp=self.webpackChunkapp||[]).push([[6200],{6200:(N,l,a)=>{a.r(l),a.d(l,{HomePageModule:()=>k});var c=a(9808),u=a(4182),s=a(9537),g=a(9800),h=a(655),f=a(8532);const p=(0,a(7423).fo)("FCM",{web:()=>a.e(8542).then(a.bind(a,8542)).then(o=>new o.FCMWeb)});var _=a(3546),n=a(2096),P=a(2325),M=a(8233),x=a(520);let C=(()=>{class o{constructor(t){this.client=t,this.finished=new n.vpe,this.munId=-1,this.selMun={id:-1,name:"",ward_nos:0},this.muns=[],this.mayorList=[],this.viceMayorList=[],this.wardList=[],this.candidates=[],this.first=!0,this.wards=[],this.urlMun="https://trendingnp.com/api/mun-list",this.urlCandidate="https://trendingnp.com/api/candi-list";const e=localStorage.getItem("muns");null!==e&&(this.muns=JSON.parse(e),console.log(e,this.muns),this.loadMunDefault()),this.loadPalika();const i=localStorage.getItem("candidates");null!==i&&(this.candidates=JSON.parse(i),console.log(i,this.candidates),this.filterCandidate()),this.loadCanddidate()}filterCandidate(){if(this.candidates.length>0){const t=this.candidates.filter(e=>e.min_id===this.munId);this.mayorList=t.filter(e=>1===e.identity).sort((e,i)=>e.votes-i.votes),this.viceMayorList=t.filter(e=>2===e.identity).sort((e,i)=>e.votes-i.votes),this.wardList=t.filter(e=>3===e.identity)}}setMunucipality(t){this.munId=t,this.selMun=this.muns.find(e=>e.id===t),this.loadWard(),console.log(this.selMun),this.filterCandidate()}loadWard(){const t=[];for(let e=1;e<=this.selMun.ward_nos;e++)t.push(e);this.wards=t}getWardList(t){return this.wardList.filter(e=>e.ward_id===t).sort((e,i)=>e.votes-i.votes)}loadMunDefault(){this.muns.length>0&&(this.selMun=this.muns[0],this.munId=this.muns[0].id,this.filterCandidate(),this.loadWard())}loadCanddidate(){this.client.get(this.urlCandidate).subscribe(t=>{this.candidates=t,this.first&&(this.loadMunDefault(),this.first=!1),localStorage.setItem("candidates",JSON.stringify(this.candidates)),this.filterCandidate(),this.finished.emit(!0)},t=>{this.finished.emit(!1)})}loadPalika(){this.client.get(this.urlMun).subscribe(t=>{this.muns=t,this.loadMunDefault(),localStorage.setItem("muns",JSON.stringify(this.muns))})}refresh(){this.loadCanddidate()}}return o.\u0275fac=function(t){return new(t||o)(n.LFG(x.eN))},o.\u0275prov=n.Yz7({token:o,factory:o.\u0275fac,providedIn:"root"}),o})();const O=["refresher"],v=function(o){return{active:o}};function w(o,r){if(1&o){const t=n.EpF();n.TgZ(0,"button",12),n.NdJ("click",function(){const d=n.CHM(t).$implicit;return n.oxw().vote.setMunucipality(d.id)}),n._uU(1),n.qZA()}if(2&o){const t=r.$implicit,e=n.oxw();n.Q6J("ngClass",n.VKq(2,v,t.id===e.vote.munId)),n.xp6(1),n.hij(" ",t.name," ")}}function Z(o,r){if(1&o&&(n.TgZ(0,"div",18)(1,"div",19),n._UZ(2,"img",20),n.qZA(),n.TgZ(3,"div",21)(4,"strong"),n._uU(5),n.qZA(),n._UZ(6,"br"),n.TgZ(7,"small"),n._uU(8),n.qZA()(),n.TgZ(9,"div",22),n._uU(10),n.qZA()()),2&o){const t=r.$implicit,e=n.oxw(2);n.xp6(2),n.hYB("src","",e.url,"",t.image,"",n.LSH),n.xp6(3),n.hij(" ",t.name," "),n.xp6(3),n.hij(" ",t.party," "),n.xp6(2),n.hij(" ",t.votes," ")}}function y(o,r){if(1&o&&(n.TgZ(0,"div",18)(1,"div",19),n._UZ(2,"img",20),n.qZA(),n.TgZ(3,"div",21)(4,"strong"),n._uU(5),n.qZA(),n._UZ(6,"br"),n.TgZ(7,"small"),n._uU(8),n.qZA()(),n.TgZ(9,"div",22),n._uU(10),n.qZA()()),2&o){const t=r.$implicit,e=n.oxw(2);n.xp6(2),n.hYB("src","",e.url,"",t.image,"",n.LSH),n.xp6(3),n.hij(" ",t.name," "),n.xp6(3),n.hij(" ",t.party," "),n.xp6(2),n.hij(" ",t.votes," ")}}function b(o,r){if(1&o&&(n.TgZ(0,"div",18)(1,"div",19),n._UZ(2,"img",20),n.qZA(),n.TgZ(3,"div",21)(4,"strong"),n._uU(5),n.qZA(),n._UZ(6,"br"),n.TgZ(7,"small"),n._uU(8),n.qZA()(),n.TgZ(9,"div",22),n._uU(10),n.qZA()()),2&o){const t=r.$implicit,e=n.oxw(3);n.xp6(2),n.hYB("src","",e.url,"",t.image,"",n.LSH),n.xp6(3),n.hij(" ",t.name," "),n.xp6(3),n.hij(" ",t.party," "),n.xp6(2),n.hij(" ",t.votes," ")}}function T(o,r){if(1&o&&(n.TgZ(0,"div"),n._UZ(1,"br"),n.TgZ(2,"h5",14)(3,"span"),n._uU(4),n.qZA()(),n.TgZ(5,"div",15),n.YNc(6,b,11,5,"div",16),n.qZA()()),2&o){const t=r.$implicit,e=n.oxw(2);n.xp6(4),n.hij(" \u0935\u093e\u0930\u094d\u0921 \u0928. ",e.getNepali(t.toString())," \u0915\u093e \u0935\u0921\u093e\u0905\u0927\u094d\u092f\u0915\u094d\u0937 \u0909\u092e\u0947\u0926\u0935\u093e\u0930\u0939\u0930\u0941 "),n.xp6(2),n.Q6J("ngForOf",e.vote.getWardList(t))}}function A(o,r){if(1&o&&(n.TgZ(0,"div",13)(1,"h5",14)(2,"span"),n._uU(3," \u092e\u0947\u092f\u0930\u0915\u093e \u0909\u092e\u0947\u0926\u0935\u093e\u0930\u0939\u0930\u0941 "),n.qZA()(),n.TgZ(4,"div",15),n.YNc(5,Z,11,5,"div",16),n.qZA(),n._UZ(6,"br"),n.TgZ(7,"h5",14)(8,"span"),n._uU(9," \u0909\u092a\u092e\u0947\u092f\u0930\u0915\u093e \u0909\u092e\u0947\u0926\u0935\u093e\u0930\u0939\u0930\u0941 "),n.qZA()(),n.TgZ(10,"div",15),n.YNc(11,y,11,5,"div",16),n.qZA(),n.YNc(12,T,7,2,"div",17),n.qZA()),2&o){const t=n.oxw();n.xp6(5),n.Q6J("ngForOf",t.vote.mayorList),n.xp6(6),n.Q6J("ngForOf",t.vote.viceMayorList),n.xp6(1),n.Q6J("ngForOf",t.vote.wards)}}function H(o,r){if(1&o){const t=n.EpF();n.TgZ(0,"div",23),n.NdJ("click",function(){return n.CHM(t),n.oxw().reset()}),n._UZ(1,"ion-icon",2),n.qZA()}}const U=[{path:"",component:(()=>{class o{constructor(t,e,i,d){this.highway=t,this.router=e,this.dateProvider=i,this.vote=d,this.munId=-1,this.url="https://trendingnp.com/",this.cats=_.Z.cats,this.replacerArr=[["1","\u0967"],["2","\u0968"],["3","\u0969"],["4","\u096a"],["5","\u096b"],["6","\u096c"],["7","\u096d"],["8","\u096e"],["9","\u096f"],["0","\u0966"]],this.first=!0,this.hasnew=!1,d.finished.subscribe(S=>{this.refresher.complete()})}ngOnInit(){return(0,h.mG)(this,void 0,void 0,function*(){try{p.getToken().then(t=>console.log(`Token ${t.token}`)).catch(t=>console.log(t)),p.subscribeTo({topic:"news"}).then(t=>console.log("subscribed to topic")).catch(t=>console.error(t)),yield f.V.addListener("pushNotificationReceived",t=>{console.log("Push notification received: ",t)})}catch(t){console.log(t)}})}arr(t){const e=[];for(let i=1;i<=t.length;i++)e.push(i);return e}show(){console.log("show"),this.hasnew=!0}reset(){this.hasnew=!1,this.vote.refresh()}open(t){console.log(t)}openFeature(t){this.router.navigate(["/featured-news/"+t])}doRefresh(t){this.vote.refresh(),console.log("kkkk")}getNepali(t){return this.replacerArr.forEach(e=>{const i=new RegExp(e[0],"gi");t=t.replace(i,e[1])}),t}}return o.\u0275fac=function(t){return new(t||o)(n.Y36(P.T),n.Y36(g.F0),n.Y36(M.y),n.Y36(C))},o.\u0275cmp=n.Xpm({type:o,selectors:[["app-home"]],viewQuery:function(t,e){if(1&t&&n.Gf(O,5),2&t){let i;n.iGM(i=n.CRH())&&(e.refresher=i.first)}},decls:22,vars:5,consts:[["slot","end"],[3,"click"],["name","refresh-circle"],["slot","fixed",3,"ionRefresh"],["refresher",""],[1,"date"],[1,"data"],[1,"muns-wrapper"],[1,"muns"],["class","mun",3,"ngClass","click",4,"ngFor","ngForOf"],["class","container",4,"ngIf"],["class","fab",3,"click",4,"ngIf"],[1,"mun",3,"ngClass","click"],[1,"container"],[1,"person-title"],[1,"person-wrapper"],["class","person",4,"ngFor","ngForOf"],[4,"ngFor","ngForOf"],[1,"person"],[1,"image"],["alt","",3,"src"],[1,"name"],[1,"vote"],[1,"fab",3,"click"]],template:function(t,e){1&t&&(n.TgZ(0,"ion-header")(1,"ion-toolbar")(2,"ion-title"),n._uU(3,"trendingNP"),n.qZA(),n.TgZ(4,"ion-buttons",0)(5,"ion-button",1),n.NdJ("click",function(){return e.reset()}),n._UZ(6,"ion-icon",2),n.qZA()()()(),n.TgZ(7,"ion-content")(8,"ion-refresher",3,4),n.NdJ("ionRefresh",function(){return e.reset()}),n._UZ(10,"ion-refresher-content"),n.qZA(),n.TgZ(11,"div",5)(12,"span"),n._uU(13),n._UZ(14,"br"),n._uU(15),n.qZA()(),n.TgZ(16,"div",6)(17,"div",7)(18,"div",8),n.YNc(19,w,2,4,"button",9),n.qZA()()(),n.YNc(20,A,13,3,"div",10),n.YNc(21,H,2,0,"div",11),n.qZA()),2&t&&(n.xp6(13),n.hij(" ",e.dateProvider.time," "),n.xp6(2),n.hij(" ",e.dateProvider.date," "),n.xp6(4),n.Q6J("ngForOf",e.vote.muns),n.xp6(1),n.Q6J("ngIf",-1!==e.vote.munId),n.xp6(1),n.Q6J("ngIf",e.hasnew))},directives:[s.Gu,s.sr,s.wd,s.Sm,s.YG,s.gu,s.W2,s.nJ,s.Wo,c.sg,c.mk,c.O5],styles:[".date[_ngcontent-%COMP%]{padding:10px;margin-bottom:10px;overflow:hidden;box-shadow:0 0 8px #0000001a;background-color:#3496d3;color:#fff;display:flex;justify-content:space-between}.container[_ngcontent-%COMP%]{margin:15px}.container[_ngcontent-%COMP%]   .card-holder[_ngcontent-%COMP%]{display:flex;flex-wrap:wrap;margin:0 -15px}.container[_ngcontent-%COMP%]   .card-holder[_ngcontent-%COMP%]   .card-wrapper[_ngcontent-%COMP%]{width:25%;padding:15px}@media (max-width: 425px){.container[_ngcontent-%COMP%]   .card-holder[_ngcontent-%COMP%]{display:display;flex-wrap:wrap;margin:0}.container[_ngcontent-%COMP%]   .card-holder[_ngcontent-%COMP%]   .card-wrapper[_ngcontent-%COMP%]{width:100%;padding:0}}.container[_ngcontent-%COMP%]   .card[_ngcontent-%COMP%]{box-shadow:0 0 8px #00000026;margin-bottom:10px;border-radius:10px;overflow:hidden}.container[_ngcontent-%COMP%]   .card[_ngcontent-%COMP%]   .card-body[_ngcontent-%COMP%]{padding:.5rem}.container[_ngcontent-%COMP%]   .card[_ngcontent-%COMP%]   .image[_ngcontent-%COMP%]{border-radius:10px;overflow:hidden;box-shadow:0 0 8px #00000014}.container[_ngcontent-%COMP%]   .card[_ngcontent-%COMP%]   .image[_ngcontent-%COMP%]   img[_ngcontent-%COMP%]{display:block}ion-icon[_ngcontent-%COMP%]{font-size:1.5rem}.fab[_ngcontent-%COMP%]{position:fixed;bottom:15px;right:15px;z-index:999;background-color:#fff;box-shadow:0 0 10px #00000026;height:60px;width:60px;display:flex;align-items:center;justify-content:center;border-radius:50%}.featured-title[_ngcontent-%COMP%]{border-bottom:1px solid rgba(0,0,0,.2);padding-bottom:5px}.featured-wrapper[_ngcontent-%COMP%]{overflow-x:scroll;overflow-y:hidden;margin-left:-10px}.featured-wrapper[_ngcontent-%COMP%]   [_ngcontent-%COMP%]::-webkit-scrollbar{display:none;height:0px;background:transparent}.featured-wrapper[_ngcontent-%COMP%]   .featured[_ngcontent-%COMP%]{display:flex;flex-wrap:nowrap}.featured-wrapper[_ngcontent-%COMP%]   .featured[_ngcontent-%COMP%]   .single-featured[_ngcontent-%COMP%]{padding:10px;width:260px}.featured-wrapper[_ngcontent-%COMP%]   .featured[_ngcontent-%COMP%]   .single-featured[_ngcontent-%COMP%]   .card[_ngcontent-%COMP%]{width:240px}.featured-wrapper[_ngcontent-%COMP%]   .featured[_ngcontent-%COMP%]   .single-featured[_ngcontent-%COMP%]   .card[_ngcontent-%COMP%]   .card-body[_ngcontent-%COMP%]{padding:0}.featured-wrapper[_ngcontent-%COMP%]   .featured[_ngcontent-%COMP%]   .single-featured[_ngcontent-%COMP%]   .card[_ngcontent-%COMP%]   .card-body[_ngcontent-%COMP%]   h6[_ngcontent-%COMP%]{padding:0 10px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.featured-wrapper[_ngcontent-%COMP%]   .featured[_ngcontent-%COMP%]   .single-featured[_ngcontent-%COMP%]   .card[_ngcontent-%COMP%]   .card-body[_ngcontent-%COMP%]   .image[_ngcontent-%COMP%]{height:125px;display:flex;align-items:center;border-radius:10px 10px 0 0;box-shadow:none}.data[_ngcontent-%COMP%]{padding-left:10px}.muns-wrapper[_ngcontent-%COMP%]{overflow-x:auto;overflow-y:hidden;padding-right:10px;padding-bottom:5px;position:sticky}.muns-wrapper[_ngcontent-%COMP%]   [_ngcontent-%COMP%]::-webkit-scrollbar{display:none;height:0px;background:transparent}.muns-wrapper[_ngcontent-%COMP%]   .muns[_ngcontent-%COMP%]{display:flex;flex-wrap:nowrap}.muns-wrapper[_ngcontent-%COMP%]   .muns[_ngcontent-%COMP%]   .mun[_ngcontent-%COMP%]{margin-right:10px;padding:10px 15px}.muns-wrapper[_ngcontent-%COMP%]   .muns[_ngcontent-%COMP%]   .mun.active[_ngcontent-%COMP%]{background-color:#3496d3;color:#fff}.person-title[_ngcontent-%COMP%]{font-size:13px;border-bottom:1px solid #F6AE1C}.person-title[_ngcontent-%COMP%]   span[_ngcontent-%COMP%]{color:#fff;padding:10px;background-color:#f6ae1c;display:inline-block;min-width:150px}@media (max-width: 425px){.person-title[_ngcontent-%COMP%]   span[_ngcontent-%COMP%]{min-width:none;max-width:150px}.person-wrapper[_ngcontent-%COMP%]{display:block!important}.person-wrapper[_ngcontent-%COMP%]   .person[_ngcontent-%COMP%]{width:auto!important}}.person-wrapper[_ngcontent-%COMP%]{display:flex;flex-wrap:wrap}.person-wrapper[_ngcontent-%COMP%]   .person[_ngcontent-%COMP%]{width:25%;margin:5px 0;padding:10px;display:flex;align-items:flex-start;box-shadow:0 0 5px #0000001a}.person-wrapper[_ngcontent-%COMP%]   .person[_ngcontent-%COMP%]   .image[_ngcontent-%COMP%]{flex:1;padding:0 10px}.person-wrapper[_ngcontent-%COMP%]   .person[_ngcontent-%COMP%]   .image[_ngcontent-%COMP%]   img[_ngcontent-%COMP%]{border-radius:5px;box-shadow:0 0 10px #0003}.person-wrapper[_ngcontent-%COMP%]   .person[_ngcontent-%COMP%]   .name[_ngcontent-%COMP%]{flex:3}.person-wrapper[_ngcontent-%COMP%]   .person[_ngcontent-%COMP%]   .vote[_ngcontent-%COMP%]{flex:2}.categories-holder[_ngcontent-%COMP%]{overflow-x:scroll;overflow-y:hidden}.categories-holder[_ngcontent-%COMP%]   [_ngcontent-%COMP%]::-webkit-scrollbar{display:none}.categories-holder[_ngcontent-%COMP%]   .categories[_ngcontent-%COMP%]{display:flex;margin:0 -5px 0 5px}.categories-holder[_ngcontent-%COMP%]   .categories[_ngcontent-%COMP%]   .category-wrapper[_ngcontent-%COMP%]{padding:5px}.categories-holder[_ngcontent-%COMP%]   .categories[_ngcontent-%COMP%]   .category-wrapper[_ngcontent-%COMP%]   .category[_ngcontent-%COMP%]{font-size:.8rem;background-color:#3496d3;color:#fff;text-align:center;border-radius:5px;box-shadow:0 0 5px #0000000d;line-height:1.3rem;white-space:nowrap;padding:5px 10px}"]}),o})()}];let F=(()=>{class o{}return o.\u0275fac=function(t){return new(t||o)},o.\u0275mod=n.oAB({type:o}),o.\u0275inj=n.cJS({imports:[[g.Bz.forChild(U)],g.Bz]}),o})(),k=(()=>{class o{}return o.\u0275fac=function(t){return new(t||o)},o.\u0275mod=n.oAB({type:o}),o.\u0275inj=n.cJS({imports:[[c.ez,u.u5,s.Pc,F]]}),o})()}}]);