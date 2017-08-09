webpackJsonp([1],{17:function(t,e,n){var o=n(1)(n(37),n(80),null,null,null);t.exports=o.exports},36:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(8),s=n(17),i=n.n(s);o.a.config.productionTip=!1,new o.a({el:"#app",render:function(t){return t(i.a)}})},37:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(8),s=n(83),i=n(18),a=n.n(i),r=n(74),c=n.n(r),m=n(76),u=n.n(m);o.a.use(s.a),o.a.directive("in-viewport",c.a);var l=new s.a.Store({state:{moments:[]},mutations:{update:function(t,e){t.moments=e}},actions:{getMoments:function(t){var e=t.commit;a.a.get("static/data.json").then(function(t){e("update",t.data.moments)})}}});e.default={name:"app",store:l,components:{Timeline:u.a},mounted:function(){this.$store.dispatch("getMoments")}}},38:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={name:"Modal",props:["image"],methods:{close:function(){this.$emit("close:modal")}}}},39:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(77),s=n.n(o),i=n(75),a=n.n(i);e.default={name:"Timeline",components:{TimelineBlock:s.a,Modal:a.a},data:function(){return{namoro:6,casado:5,modalImage:"",modalOpen:!1}},computed:{moments:function(){return this.$store.state.moments},numberOfMoments:function(){return this.moments.length}},methods:{open:function(t){this.modalOpen=!0,this.modalImage=t},close:function(){this.modalOpen=!1}}}},40:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(41),s=n.n(o);e.default={name:"TimelineBlock",props:["moment"],data:function(){return{icons:{location:"static/svg/location.svg",video:"static/svg/video.svg",youtube:"static/svg/youtube.svg",image:"static/svg/image.svg"}}},methods:{pathAsset:function(t){return"./static/images/"+this.moment[t]},ytEmbedUrl:function(t){return"https://www.youtube.com/embed/"+t+"?autoplay=0"},open:function(){this.$emit("open:modal",this.pathAsset("image"))}},computed:{icon:function(){var t=this,e=s()(this.moment).filter(function(e){return s()(t.icons).includes(e)});return 1===e.length?this.icons[e.pop()]:this.icons.location}}}},68:function(t,e){},69:function(t,e){},70:function(t,e){},75:function(t,e,n){function o(t){n(70)}var s=n(1)(n(38),n(81),o,null,null);t.exports=s.exports},76:function(t,e,n){function o(t){n(69)}var s=n(1)(n(39),n(79),o,"data-v-3f506705",null);t.exports=s.exports},77:function(t,e,n){function o(t){n(68)}var s=n(1)(n(40),n(78),o,"data-v-2bcedf90",null);t.exports=s.exports},78:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{directives:[{name:"in-viewport",rawName:"v-in-viewport",value:{top:-200,bottom:-250},expression:"{top: -200, bottom: -250}"}],staticClass:"cd-timeline-block"},[n("div",{staticClass:"cd-timeline-img cd-picture"},[n("img",{attrs:{src:t.icon,alt:"Picture"}})]),t._v(" "),n("div",{staticClass:"cd-timeline-content"},[n("span",{staticClass:"cd-date"},[t._v(t._s(t.moment.day))]),t._v(" "),n("h2",[t._v(t._s(t.moment.place))]),t._v(" "),n("p",[t._v(t._s(t.moment.description))]),t._v(" "),t.moment.image?n("img",{attrs:{src:t.pathAsset("image"),width:"100%",height:"auto",alt:t.moment.description},on:{click:t.open}}):t._e(),t._v(" "),t.moment.youtube?n("iframe",{attrs:{type:"text/html",width:"100%",height:"auto",src:t.ytEmbedUrl(t.moment.youtube),frameborder:"0"}}):t._e(),t._v(" "),t.moment.video?n("video",{attrs:{src:t.pathAsset("video"),width:"100%",height:"auto",controls:""}}):t._e()])])},staticRenderFns:[]}},79:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("header",[n("h1",[t._v("Timeline dos nossos "+t._s(t.namoro)+" anos\n      "),n("small",[t._v("São "+t._s(t.numberOfMoments)+" momentos dessa longa trajetória")])])]),t._v(" "),t._m(0),t._v(" "),n("section",{staticClass:"cd-container",attrs:{id:"cd-timeline"}},t._l(t.moments,function(e){return n("TimelineBlock",{key:e.day,attrs:{moment:e},on:{"open:modal":t.open}})})),t._v(" "),n("transition",{attrs:{name:"fade"}},[n("modal",{directives:[{name:"show",rawName:"v-show",value:t.modalOpen,expression:"modalOpen"}],attrs:{image:t.modalImage},on:{"close:modal":t.close}})],1)],1)},staticRenderFns:[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("section",{staticClass:"cd-container cd-container--explanation"},[n("p",[t._v("Vários e vários dos nossos momentos, bons e ruins, catalogados aqui. Vários também não estão presentes mas, claro, fazem parte dessa história,\n      "),n("em",[t._v("nossa")]),t._v(" história.")]),t._v(" "),n("p",[t._v("Quantos mais virão? Não sei, espero que muitos, de preferência bons...")])])}]}},80:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{attrs:{id:"app"}},[n("Timeline")],1)},staticRenderFns:[]}},81:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"modal",on:{click:t.close}},[n("div",{staticClass:"modal__content",on:{click:t.close}},[n("img",{attrs:{src:t.image},on:{click:t.close}})])])},staticRenderFns:[]}}},[36]);
//# sourceMappingURL=app.a0447467fdb4c21cbb13.js.map