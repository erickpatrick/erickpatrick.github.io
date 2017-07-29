webpackJsonp([0],[,,function(e,t,n){"use strict";var s=n(1),r=n(24),i=n(19),o=n.n(i);s.a.use(r.a),t.a=new r.a({routes:[{path:"/",name:"Quiz",component:o.a}]})},,function(e,t){},function(e,t){},function(e,t,n){function s(e){n(13)}var r=n(0)(n(8),n(21),s,null,null);e.exports=r.exports},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var s=n(1),r=n(3),i=n(5),o=(n.n(i),n(4)),a=(n.n(o),n(6)),u=n.n(a),c=n(2);s.a.use(r.a),s.a.config.productionTip=!1,new s.a({el:"#app",router:c.a,template:"<App/>",components:{App:u.a}})},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default={name:"app"}},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default={name:"Choice",props:["choice","answer","index","answered"],computed:{updateClass:function(){return{"list-group-item-success":this.status,"list-group-item-danger":this.chosen&&!1===this.status}}},watch:{answered:function(){this.updateStatus(this.index)}},methods:{showAnswer:function(e){this.answered||(this.updateStatus(e),this.choose(),this.$emit("wasAnswered"),this.$emit("wasCorrect",this.answer===e))},updateStatus:function(e){this.status=this.answer===e},choose:function(){this.chosen=!this.status}},data:function(){return{status:!1,chosen:!1}}}},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var s=n(17),r=n.n(s);t.default={name:"Question",components:{choice:r.a},props:["question","index"],methods:{wasAnswered:function(){this.answered=!0},wasCorrect:function(e){e&&this.$emit("increment")}},data:function(){return{answered:!1,correct:!1}}}},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var s=n(18),r=n.n(s);t.default={name:"Quiz",components:{question:r.a},methods:{increment:function(){this.correct+=1}},data:function(){return{name:"My really awesome quiz",questions:[{title:"This is the title of the first question. Isn't it nice?",image:"http://lorempixel.com/400/200/food",choices:["first answer","second answer","thrid answer","fourth answer"],answer:0},{title:"And what would you think about the second question?",image:"http://lorempixel.com/400/200/sports",choices:["first answer","second answer","thrid answer","fourth answer"],answer:2},{title:"What about the third? Awesome for sure, right?!",image:"http://lorempixel.com/400/200/animals",choices:["first answer","second answer","thrid answer","fourth answer"],answer:Math.floor(10*Math.random()/3)}],correct:0}},computed:{numberOfQuestions:function(){return this.questions.length}}}},function(e,t){},function(e,t){},function(e,t){},function(e,t){},,function(e,t,n){function s(e){n(14)}var r=n(0)(n(9),n(22),s,"data-v-2669c4c3",null);e.exports=r.exports},function(e,t,n){function s(e){n(15)}var r=n(0)(n(10),n(23),s,null,null);e.exports=r.exports},function(e,t,n){function s(e){n(12)}var r=n(0)(n(11),n(20),s,"data-v-0a53c9f7",null);e.exports=r.exports},function(e,t){e.exports={render:function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"quiz"},[n("h1",[e._v(e._s(e.name))]),e._v(" "),e.numberOfQuestions?n("div",e._l(e.questions,function(t,s){return n("question",{key:s,attrs:{question:t,index:s},on:{increment:e.increment}})})):e._e(),e._v(" "),n("h5",[e._v("Correct answers: "+e._s(e.correct))])])},staticRenderFns:[]}},function(e,t){e.exports={render:function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{attrs:{id:"app"}},[n("router-view")],1)},staticRenderFns:[]}},function(e,t){e.exports={render:function(){var e=this,t=e.$createElement;return(e._self._c||t)("b-list-group-item",{class:e.updateClass,nativeOn:{click:function(t){e.showAnswer(e.index)}}},[e._v("\n  "+e._s(e.choice)+"\n")])},staticRenderFns:[]}},function(e,t){e.exports={render:function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"question"},[n("b-card",{staticClass:"mb-2",attrs:{img:e.question.image,title:e.question.title}},[n("b-list-group",{attrs:{flush:!0}},e._l(e.question.choices,function(t,s){return n("choice",{key:s,attrs:{choice:t,index:s,answer:e.question.answer,answered:e.answered},on:{wasAnswered:e.wasAnswered,wasCorrect:e.wasCorrect}})}))],1)],1)},staticRenderFns:[]}}],[7]);
//# sourceMappingURL=app.e81f4c4744ec2a1c6d80.js.map