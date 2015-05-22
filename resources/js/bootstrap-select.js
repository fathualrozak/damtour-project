/*!
 * Bootstrap-select v1.6.5 (http://silviomoreto.github.io/bootstrap-select)
 *
 * Copyright 2013-2015 bootstrap-select
 * Licensed under MIT (https://github.com/silviomoreto/bootstrap-select/blob/master/LICENSE)
 */
!function(a){"use strict";function b(b){var c=[{re:/[\xC0-\xC6]/g,ch:"A"},{re:/[\xE0-\xE6]/g,ch:"a"},{re:/[\xC8-\xCB]/g,ch:"E"},{re:/[\xE8-\xEB]/g,ch:"e"},{re:/[\xCC-\xCF]/g,ch:"I"},{re:/[\xEC-\xEF]/g,ch:"i"},{re:/[\xD2-\xD6]/g,ch:"O"},{re:/[\xF2-\xF6]/g,ch:"o"},{re:/[\xD9-\xDC]/g,ch:"U"},{re:/[\xF9-\xFC]/g,ch:"u"},{re:/[\xC7-\xE7]/g,ch:"c"},{re:/[\xD1]/g,ch:"N"},{re:/[\xF1]/g,ch:"n"}];return a.each(c,function(){b=b.replace(this.re,this.ch)}),b}function c(a){var b={"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#x27;","`":"&#x60;"},c="(?:"+Object.keys(b).join("|")+")",d=new RegExp(c),e=new RegExp(c,"g"),f=null==a?"":""+a;return d.test(f)?f.replace(e,function(a){return b[a]}):f}function d(b,c){var d=arguments,f=b,g=c;[].shift.apply(d);var h,i=this.each(function(){var b=a(this);if(b.is("select")){var c=b.data("selectpicker"),i="object"==typeof f&&f;if(c){if(i)for(var j in i)i.hasOwnProperty(j)&&(c.options[j]=i[j])}else{var k=a.extend({},e.DEFAULTS,a.fn.selectpicker.defaults||{},b.data(),i);b.data("selectpicker",c=new e(this,k,g))}"string"==typeof f&&(h=c[f]instanceof Function?c[f].apply(c,d):c.options[f])}});return"undefined"!=typeof h?h:i}String.prototype.includes||!function(){var a={}.toString,b=function(){try{var a={},b=Object.defineProperty,c=b(a,a,a)&&b}catch(d){}return c}(),c="".indexOf,d=function(b){if(null==this)throw TypeError();var d=String(this);if(b&&"[object RegExp]"==a.call(b))throw TypeError();var e=d.length,f=String(b),g=f.length,h=arguments.length>1?arguments[1]:void 0,i=h?Number(h):0;i!=i&&(i=0);var j=Math.min(Math.max(i,0),e);return g+j>e?!1:-1!=c.call(d,f,i)};b?b(String.prototype,"includes",{value:d,configurable:!0,writable:!0}):String.prototype.includes=d}(),String.prototype.startsWith||!function(){var a=function(){try{var a={},b=Object.defineProperty,c=b(a,a,a)&&b}catch(d){}return c}(),b={}.toString,c=function(a){if(null==this)throw TypeError();var c=String(this);if(a&&"[object RegExp]"==b.call(a))throw TypeError();var d=c.length,e=String(a),f=e.length,g=arguments.length>1?arguments[1]:void 0,h=g?Number(g):0;h!=h&&(h=0);var i=Math.min(Math.max(h,0),d);if(f+i>d)return!1;for(var j=-1;++j<f;)if(c.charCodeAt(i+j)!=e.charCodeAt(j))return!1;return!0};a?a(String.prototype,"startsWith",{value:c,configurable:!0,writable:!0}):String.prototype.startsWith=c}(),a.expr[":"].icontains=function(b,c,d){var e=a(b),f=(e.data("tokens")||e.text()).toUpperCase();return f.includes(d[3].toUpperCase())},a.expr[":"].ibegins=function(b,c,d){var e=a(b),f=(e.data("tokens")||e.text()).toUpperCase();return f.startsWith(d[3].toUpperCase())},a.expr[":"].aicontains=function(b,c,d){var e=a(b),f=(e.data("tokens")||e.data("normalizedText")||e.text()).toUpperCase();return f.includes(f,d[3])},a.expr[":"].aibegins=function(b,c,d){var e=a(b),f=(e.data("tokens")||e.data("normalizedText")||e.text()).toUpperCase();return f.startsWith(d[3].toUpperCase())};var e=function(b,c,d){d&&(d.stopPropagation(),d.preventDefault()),this.$element=a(b),this.$newElement=null,this.$button=null,this.$menu=null,this.$lis=null,this.options=c,null===this.options.title&&(this.options.title=this.$element.attr("title")),this.val=e.prototype.val,this.render=e.prototype.render,this.refresh=e.prototype.refresh,this.setStyle=e.prototype.setStyle,this.selectAll=e.prototype.selectAll,this.deselectAll=e.prototype.deselectAll,this.destroy=e.prototype.remove,this.remove=e.prototype.remove,this.show=e.prototype.show,this.hide=e.prototype.hide,this.init()};e.VERSION="1.6.5",e.DEFAULTS={noneSelectedText:"Nothing selected",noneResultsText:"No results matched {0}",countSelectedText:function(a){return 1==a?"{0} item selected":"{0} items selected"},maxOptionsText:function(a,b){return[1==a?"Limit reached ({n} item max)":"Limit reached ({n} items max)",1==b?"Group limit reached ({n} item max)":"Group limit reached ({n} items max)"]},selectAllText:"Select All",deselectAllText:"Deselect All",doneButton:!1,doneButtonText:"Close",multipleSeparator:", ",style:"btn-default",size:"auto",title:null,selectedTextFormat:"values",width:!1,container:!1,hideDisabled:!1,showSubtext:!1,showIcon:!0,showContent:!0,dropupAuto:!0,header:!1,liveSearch:!1,liveSearchPlaceholder:null,liveSearchNormalize:!1,liveSearchStyle:"contains",actionsBox:!1,iconBase:"glyphicon",tickIcon:"glyphicon-ok",maxOptions:!1,mobile:!1,selectOnTab:!1,dropdownAlignRight:!1},e.prototype={constructor:e,init:function(){var b=this,c=this.$element.attr("id");this.$element.hide(),this.multiple=this.$element.prop("multiple"),this.autofocus=this.$element.prop("autofocus"),this.$newElement=this.createView(),this.$element.after(this.$newElement),this.$button=this.$newElement.children("button"),this.$menu=this.$newElement.children(".dropdown-menu"),this.$searchbox=this.$menu.find("input"),this.options.dropdownAlignRight&&this.$menu.addClass("dropdown-menu-right"),"undefined"!=typeof c&&(this.$button.attr("data-id",c),a('label[for="'+c+'"]').click(function(a){a.preventDefault(),b.$button.focus()})),this.checkDisabled(),this.clickListener(),this.options.liveSearch&&this.liveSearchListener(),this.render(),this.liHeight(),this.setStyle(),this.setWidth(),this.options.container&&this.selectPosition(),this.$menu.data("this",this),this.$newElement.data("this",this),this.options.mobile&&this.mobile()},createDropdown:function(){var b=this.multiple?" show-tick":"",d=this.$element.parent().hasClass("input-group")?" input-group-btn":"",e=this.autofocus?" autofocus":"",f=this.options.header?'<div class="popover-title"><button type="button" class="close" aria-hidden="true">&times;</button>'+this.options.header+"</div>":"",g=this.options.liveSearch?'<div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off"'+(null===this.options.liveSearchPlaceholder?"":' placeholder="'+c(this.options.liveSearchPlaceholder)+'"')+"></div>":"",h=this.multiple&&this.options.actionsBox?'<div class="bs-actionsbox"><div class="btn-group btn-group-sm btn-block"><button class="actions-btn bs-select-all btn btn-default">'+this.options.selectAllText+'</button><button class="actions-btn bs-deselect-all btn btn-default">'+this.options.deselectAllText+"</button></div></div>":"",i=this.multiple&&this.options.doneButton?'<div class="bs-donebutton"><div class="btn-group btn-block"><button class="btn btn-sm btn-default">'+this.options.doneButtonText+"</button></div></div>":"",j='<div class="btn-group bootstrap-select'+b+d+'"><button type="button" class="btn dropdown-toggle" data-toggle="dropdown"'+e+'><span class="filter-option pull-left"></span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open">'+f+g+h+'<ul class="dropdown-menu inner" role="menu"></ul>'+i+"</div></div>";return a(j)},createView:function(){var a=this.createDropdown(),b=this.createLi();return a.find("ul").append(b),a},reloadLi:function(){this.destroyLi();var a=this.createLi();this.$menu.find("ul").append(a)},destroyLi:function(){this.$menu.find("li").remove()},createLi:function(){var d=this,e=[],f=0,g=function(a,b,c,d){return"<li"+("undefined"!=typeof c&""!==c?' class="'+c+'"':"")+("undefined"!=typeof b&null!==b?' data-original-index="'+b+'"':"")+("undefined"!=typeof d&null!==d?'data-optgroup="'+d+'"':"")+">"+a+"</li>"},h=function(a,e,f,g){return'<a tabindex="0"'+("undefined"!=typeof e?' class="'+e+'"':"")+("undefined"!=typeof f?' style="'+f+'"':"")+' data-normalized-text="'+b(c(a))+'"'+("undefined"!=typeof g||null!==g?' data-tokens="'+g+'"':"")+">"+a+'<span class="'+d.options.iconBase+" "+d.options.tickIcon+' check-mark"></span></a>'};return this.$element.find("option").each(function(b){var c=a(this),i=c.attr("class")||"",j=c.attr("style"),k=c.data("content")?c.data("content"):c.html(),l=c.data("tokens")?c.data("tokens"):null,m="undefined"!=typeof c.data("subtext")?'<small class="text-muted">'+c.data("subtext")+"</small>":"",n="undefined"!=typeof c.data("icon")?'<span class="'+d.options.iconBase+" "+c.data("icon")+'"></span> ':"",o=c.is(":disabled")||c.parent().is(":disabled");if(""!==n&&o&&(n="<span>"+n+"</span>"),c.data("content")||(k=n+'<span class="text">'+k+m+"</span>"),!d.options.hideDisabled||!o)if(c.parent().is("optgroup")&&c.data("divider")!==!0){if(0===c.index()){f+=1;var p=c.parent().attr("label"),q="undefined"!=typeof c.parent().data("subtext")?'<small class="text-muted">'+c.parent().data("subtext")+"</small>":"",r=c.parent().data("icon")?'<span class="'+d.options.iconBase+" "+c.parent().data("icon")+'"></span> ':"";p=r+'<span class="text">'+p+q+"</span>",0!==b&&e.length>0&&e.push(g("",null,"divider",f+"div")),e.push(g(p,null,"dropdown-header",f))}e.push(g(h(k,"opt "+i,j,l),b,"",f))}else c.data("divider")===!0?e.push(g("",b,"divider")):c.data("hidden")===!0?e.push(g(h(k,i,j,l),b,"hidden is-hidden")):(c.prev().is("optgroup")&&e.push(g("",null,"divider",f+"div")),e.push(g(h(k,i,j,l),b)))}),this.multiple||0!==this.$element.find("option:selected").length||this.options.title||this.$element.find("option").eq(0).prop("selected",!0).attr("selected","selected"),a(e.join(""))},findLis:function(){return null==this.$lis&&(this.$lis=this.$menu.find("li")),this.$lis},render:function(b){var c=this;b!==!1&&this.$element.find("option").each(function(b){c.setDisabled(b,a(this).is(":disabled")||a(this).parent().is(":disabled")),c.setSelected(b,a(this).is(":selected"))}),this.tabIndex();var d=this.options.hideDisabled?":enabled":"",e=this.$element.find("option:selected"+d).map(function(){var b,d=a(this),e=d.data("icon")&&c.options.showIcon?'<i class="'+c.options.iconBase+" "+d.data("icon")+'"></i> ':"";return b=c.options.showSubtext&&d.data("subtext")&&!c.multiple?' <small class="text-muted">'+d.data("subtext")+"</small>":"","undefined"!=typeof d.attr("title")?d.attr("title"):d.data("content")&&c.options.showContent?d.data("content"):e+d.html()+b}).toArray(),f=this.multiple?e.join(this.options.multipleSeparator):e[0];if(this.multiple&&this.options.selectedTextFormat.indexOf("count")>-1){var g=this.options.selectedTextFormat.split(">");if(g.length>1&&e.length>g[1]||1==g.length&&e.length>=2){d=this.options.hideDisabled?", [disabled]":"";var h=this.$element.find("option").not('[data-divider="true"], [data-hidden="true"]'+d).length,i="function"==typeof this.options.countSelectedText?this.options.countSelectedText(e.length,h):this.options.countSelectedText;f=i.replace("{0}",e.length.toString()).replace("{1}",h.toString())}}void 0==this.options.title&&(this.options.title=this.$element.attr("title")),"static"==this.options.selectedTextFormat&&(f=this.options.title),f||(f="undefined"!=typeof this.options.title?this.options.title:this.options.noneSelectedText),this.$button.attr("title",a.trim(f.replace(/<[^>]*>?/g,""))),this.$button.children(".filter-option").html(f)},setStyle:function(a,b){this.$element.attr("class")&&this.$newElement.addClass(this.$element.attr("class").replace(/selectpicker|mobile-device|validate\[.*\]/gi,""));var c=a?a:this.options.style;"add"==b?this.$button.addClass(c):"remove"==b?this.$button.removeClass(c):(this.$button.removeClass(this.options.style),this.$button.addClass(c))},liHeight:function(){if(this.options.size!==!1){var a=this.$menu.parent().clone().children(".dropdown-toggle").prop("autofocus",!1).end().appendTo("body"),b=a.addClass("open").children(".dropdown-menu"),c=b.find("li").not(".divider, .dropdown-header").filter(":visible").children("a").outerHeight(),d=this.options.header?b.find(".popover-title").outerHeight():0,e=this.options.liveSearch?b.find(".bs-searchbox").outerHeight():0,f=this.options.actionsBox?b.find(".bs-actionsbox").outerHeight():0,g=this.multiple?b.find(".bs-donebutton").outerHeight():0;a.remove(),this.$newElement.data("liHeight",c).data("headerHeight",d).data("searchHeight",e).data("actionsHeight",f).data("doneButtonHeight",g)}},setSize:function(){this.findLis();var b,c,d,e=this,f=this.$menu,g=f.children(".inner"),h=this.$newElement.outerHeight(),i=this.$newElement.data("liHeight"),j=this.$newElement.data("headerHeight"),k=this.$newElement.data("searchHeight"),l=this.$newElement.data("actionsHeight"),m=this.$newElement.data("doneButtonHeight"),n=this.$lis.filter(".divider").outerHeight(!0),o=parseInt(f.css("padding-top"))+parseInt(f.css("padding-bottom"))+parseInt(f.css("border-top-width"))+parseInt(f.css("border-bottom-width")),p=this.options.hideDisabled?".disabled":"",q=a(window),r=o+parseInt(f.css("margin-top"))+parseInt(f.css("margin-bottom"))+2,s=function(){c=e.$newElement.offset().top-q.scrollTop(),d=q.height()-c-h};if(s(),this.options.header&&f.css("padding-top",0),"auto"==this.options.size){var t=function(){var a,h=e.$lis.not(".hidden");s(),b=d-r,e.options.dropupAuto&&e.$newElement.toggleClass("dropup",c>d&&b-r<f.height()),e.$newElement.hasClass("dropup")&&(b=c-r),a=h.length+h.filter(".dropdown-header").length>3?3*i+r-2:0,f.css({"max-height":b+"px",overflow:"hidden","min-height":a+j+k+l+m+"px"}),g.css({"max-height":b-j-k-l-m-o+"px","overflow-y":"auto","min-height":Math.max(a-o,0)+"px"})};t(),this.$searchbox.off("input.getSize propertychange.getSize").on("input.getSize propertychange.getSize",t),q.off("resize.getSize scroll.getSize").on("resize.getSize scroll.getSize",t)}else if(this.options.size&&"auto"!=this.options.size&&f.find("li").not(p).length>this.options.size){var u=this.$lis.not(".divider").not(p).children().slice(0,this.options.size).last().parent().index(),v=this.$lis.slice(0,u+1).filter(".divider").length;b=i*this.options.size+v*n+o,e.options.dropupAuto&&this.$newElement.toggleClass("dropup",c>d&&b<f.height()),f.css({"max-height":b+j+k+l+m+"px",overflow:"hidden"}),g.css({"max-height":b-o+"px","overflow-y":"auto"})}},setWidth:function(){if("auto"==this.options.width){this.$menu.css("min-width","0");var a=this.$newElement.clone().appendTo("body"),b=a.children(".dropdown-menu").css("width"),c=a.css("width","auto").children("button").css("width");a.remove(),this.$newElement.css("width",Math.max(parseInt(b),parseInt(c))+"px")}else"fit"==this.options.width?(this.$menu.css("min-width",""),this.$newElement.css("width","").addClass("fit-width")):this.options.width?(this.$menu.css("min-width",""),this.$newElement.css("width",this.options.width)):(this.$menu.css("min-width",""),this.$newElement.css("width",""));this.$newElement.hasClass("fit-width")&&"fit"!==this.options.width&&this.$newElement.removeClass("fit-width")},selectPosition:function(){var b,c,d=this,e="<div />",f=a(e),g=function(a){f.addClass(a.attr("class").replace(/form-control/gi,"")).toggleClass("dropup",a.hasClass("dropup")),b=a.offset(),c=a.hasClass("dropup")?0:a[0].offsetHeight,f.css({top:b.top+c,left:b.left,width:a[0].offsetWidth,position:"absolute"})};this.$newElement.on("click",function(){d.isDisabled()||(g(a(this)),f.appendTo(d.options.container),f.toggleClass("open",!a(this).hasClass("open")),f.append(d.$menu))}),a(window).on("resize scroll",function(){g(d.$newElement)}),a("html").on("click",function(b){a(b.target).closest(d.$newElement).length<1&&f.removeClass("open")})},setSelected:function(a,b){this.findLis(),this.$lis.filter('[data-original-index="'+a+'"]').toggleClass("selected",b)},setDisabled:function(a,b){this.findLis(),b?this.$lis.filter('[data-original-index="'+a+'"]').addClass("disabled").children("a").attr("href","#").attr("tabindex",-1):this.$lis.filter('[data-original-index="'+a+'"]').removeClass("disabled").children("a").removeAttr("href").attr("tabindex",0)},isDisabled:function(){return this.$element.is(":disabled")},checkDisabled:function(){var a=this;this.isDisabled()?this.$button.addClass("disabled").attr("tabindex",-1):(this.$button.hasClass("disabled")&&this.$button.removeClass("disabled"),-1!=this.$button.attr("tabindex")||this.$element.data("tabindex")||this.$button.removeAttr("tabindex")),this.$button.click(function(){return!a.isDisabled()})},tabIndex:function(){this.$element.is("[tabindex]")&&(this.$element.data("tabindex",this.$element.attr("tabindex")),this.$button.attr("tabindex",this.$element.data("tabindex")))},clickListener:function(){var b=this;this.$newElement.on("touchstart.dropdown",".dropdown-menu",function(a){a.stopPropagation()}),this.$newElement.on("click",function(){b.setSize(),b.options.liveSearch||b.multiple||setTimeout(function(){b.$menu.find(".selected a").focus()},10)}),this.$menu.on("click","li a",function(c){var d=a(this),e=d.parent().data("originalIndex"),f=b.$element.val(),g=b.$element.prop("selectedIndex");if(b.multiple&&c.stopPropagation(),c.preventDefault(),!b.isDisabled()&&!d.parent().hasClass("disabled")){var h=b.$element.find("option"),i=h.eq(e),j=i.prop("selected"),k=i.parent("optgroup"),l=b.options.maxOptions,m=k.data("maxOptions")||!1;if(b.multiple){if(i.prop("selected",!j),b.setSelected(e,!j),d.blur(),l!==!1||m!==!1){var n=l<h.filter(":selected").length,o=m<k.find("option:selected").length;if(l&&n||m&&o)if(l&&1==l)h.prop("selected",!1),i.prop("selected",!0),b.$menu.find(".selected").removeClass("selected"),b.setSelected(e,!0);else if(m&&1==m){k.find("option:selected").prop("selected",!1),i.prop("selected",!0);var p=d.data("optgroup");b.$menu.find(".selected").has('a[data-optgroup="'+p+'"]').removeClass("selected"),b.setSelected(e,!0)}else{var q="function"==typeof b.options.maxOptionsText?b.options.maxOptionsText(l,m):b.options.maxOptionsText,r=q[0].replace("{n}",l),s=q[1].replace("{n}",m),t=a('<div class="notify"></div>');q[2]&&(r=r.replace("{var}",q[2][l>1?0:1]),s=s.replace("{var}",q[2][m>1?0:1])),i.prop("selected",!1),b.$menu.append(t),l&&n&&(t.append(a("<div>"+r+"</div>")),b.$element.trigger("maxReached.bs.select")),m&&o&&(t.append(a("<div>"+s+"</div>")),b.$element.trigger("maxReachedGrp.bs.select")),setTimeout(function(){b.setSelected(e,!1)},10),t.delay(750).fadeOut(300,function(){a(this).remove()})}}}else h.prop("selected",!1),i.prop("selected",!0),b.$menu.find(".selected").removeClass("selected"),b.setSelected(e,!0);b.multiple?b.options.liveSearch&&b.$searchbox.focus():b.$button.focus(),(f!=b.$element.val()&&b.multiple||g!=b.$element.prop("selectedIndex")&&!b.multiple)&&b.$element.change()}}),this.$menu.on("click","li.disabled a, .popover-title, .popover-title :not(.close)",function(a){a.currentTarget==this&&(a.preventDefault(),a.stopPropagation(),b.options.liveSearch?b.$searchbox.focus():b.$button.focus())}),this.$menu.on("click","li.divider, li.dropdown-header",function(a){a.preventDefault(),a.stopPropagation(),b.options.liveSearch?b.$searchbox.focus():b.$button.focus()}),this.$menu.on("click",".popover-title .close",function(){b.$button.focus()}),this.$searchbox.on("click",function(a){a.stopPropagation()}),this.$menu.on("click",".actions-btn",function(c){b.options.liveSearch?b.$searchbox.focus():b.$button.focus(),c.preventDefault(),c.stopPropagation(),a(this).hasClass("bs-select-all")?b.selectAll():b.deselectAll(),b.$element.change()}),this.$element.change(function(){b.render(!1)})},liveSearchListener:function(){var d=this,e=a('<li class="no-results"></li>');this.$newElement.on("click.dropdown.data-api touchstart.dropdown.data-api",function(){d.$menu.find(".active").removeClass("active"),d.$searchbox.val()&&(d.$searchbox.val(""),d.$lis.not(".is-hidden").removeClass("hidden"),e.parent().length&&e.remove()),d.multiple||d.$menu.find(".selected").addClass("active"),setTimeout(function(){d.$searchbox.focus()},10)}),this.$searchbox.on("click.dropdown.data-api focus.dropdown.data-api touchend.dropdown.data-api",function(a){a.stopPropagation()}),this.$searchbox.on("input propertychange",function(){if(d.$searchbox.val()){var f=d.$lis.not(".is-hidden").removeClass("hidden").children("a");f=f.not(d.options.liveSearchNormalize?":a"+d._searchStyle()+"("+b(d.$searchbox.val())+")":":"+d._searchStyle()+"("+d.$searchbox.val()+")"),f.parent().addClass("hidden"),d.$lis.filter(".dropdown-header").each(function(){var b=a(this),c=b.data("optgroup");0===d.$lis.filter("[data-optgroup="+c+"]").not(b).not(".hidden").length&&(b.addClass("hidden"),d.$lis.filter("[data-optgroup="+c+"div]").addClass("hidden"))});var g=d.$lis.not(".hidden");g.each(function(b){var c=a(this);c.hasClass("divider")&&(c.index()===g.eq(0).index()||c.index()===g.last().index()||g.eq(b+1).hasClass("divider"))&&c.addClass("hidden")}),d.$lis.not(".hidden, .no-results").length?e.parent().length&&e.remove():(e.parent().length&&e.remove(),e.html(d.options.noneResultsText.replace("{0}",'"'+c(d.$searchbox.val())+'"')).show(),d.$menu.append(e))}else d.$lis.not(".is-hidden").removeClass("hidden"),e.parent().length&&e.remove();d.$lis.filter(".active").removeClass("active"),d.$lis.not(".hidden, .divider, .dropdown-header").eq(0).addClass("active").children("a").focus(),a(this).focus()})},_searchStyle:function(){var a="icontains";switch(this.options.liveSearchStyle){case"begins":case"startsWith":a="ibegins";break;case"contains":}return a},val:function(a){return"undefined"!=typeof a?(this.$element.val(a),this.render(),this.$element):this.$element.val()},selectAll:function(){this.findLis(),this.$element.find("option:enabled").not("[data-divider], [data-hidden]").prop("selected",!0),this.$lis.not(".divider, .dropdown-header, .disabled, .hidden").addClass("selected"),this.render(!1)},deselectAll:function(){this.findLis(),this.$element.find("option:enabled").not("[data-divider], [data-hidden]").prop("selected",!1),this.$lis.not(".divider, .dropdown-header, .disabled, .hidden").removeClass("selected"),this.render(!1)},keydown:function(c){var d,e,f,g,h,i,j,k,l,m=a(this),n=m.is("input")?m.parent().parent():m.parent(),o=n.data("this"),p={32:" ",48:"0",49:"1",50:"2",51:"3",52:"4",53:"5",54:"6",55:"7",56:"8",57:"9",59:";",65:"a",66:"b",67:"c",68:"d",69:"e",70:"f",71:"g",72:"h",73:"i",74:"j",75:"k",76:"l",77:"m",78:"n",79:"o",80:"p",81:"q",82:"r",83:"s",84:"t",85:"u",86:"v",87:"w",88:"x",89:"y",90:"z",96:"0",97:"1",98:"2",99:"3",100:"4",101:"5",102:"6",103:"7",104:"8",105:"9"};if(o.options.liveSearch&&(n=m.parent().parent()),o.options.container&&(n=o.$menu),d=a("[role=menu] li a",n),l=o.$menu.parent().hasClass("open"),!l&&/([0-9]|[A-z])/.test(String.fromCharCode(c.keyCode))&&(o.options.container?o.$newElement.trigger("click"):(o.setSize(),o.$menu.parent().addClass("open"),l=!0),o.$searchbox.focus()),o.options.liveSearch&&(/(^9$|27)/.test(c.keyCode.toString(10))&&l&&0===o.$menu.find(".active").length&&(c.preventDefault(),o.$menu.parent().removeClass("open"),o.$button.focus()),d=a("[role=menu] li:not(.divider):not(.dropdown-header):visible a",n),m.val()||/(38|40)/.test(c.keyCode.toString(10))||0===d.filter(".active").length&&(d=o.$newElement.find("li a"),d=d.filter(o.options.liveSearchNormalize?":a"+o._searchStyle()+"("+b(p[c.keyCode])+")":":"+o._searchStyle()+"("+p[c.keyCode]+")"))),d.length){if(/(38|40)/.test(c.keyCode.toString(10)))e=d.index(d.filter(":focus")),g=d.parent(":not(.disabled):visible").first().index(),h=d.parent(":not(.disabled):visible").last().index(),f=d.eq(e).parent().nextAll(":not(.disabled):visible").eq(0).index(),i=d.eq(e).parent().prevAll(":not(.disabled):visible").eq(0).index(),j=d.eq(f).parent().prevAll(":not(.disabled):visible").eq(0).index(),o.options.liveSearch&&(d.each(function(b){a(this).hasClass("disabled")||a(this).data("index",b)}),e=d.index(d.filter(".active")),g=d.filter(":not(.disabled):visible").first().data("index"),h=d.filter(":not(.disabled):visible").last().data("index"),f=d.eq(e).nextAll(":not(.disabled):visible").eq(0).data("index"),i=d.eq(e).prevAll(":not(.disabled):visible").eq(0).data("index"),j=d.eq(f).prevAll(":not(.disabled):visible").eq(0).data("index")),k=m.data("prevIndex"),38==c.keyCode?(o.options.liveSearch&&(e-=1),e!=j&&e>i&&(e=i),g>e&&(e=g),e==k&&(e=h)):40==c.keyCode&&(o.options.liveSearch&&(e+=1),-1==e&&(e=0),e!=j&&f>e&&(e=f),e>h&&(e=h),e==k&&(e=g)),m.data("prevIndex",e),o.options.liveSearch?(c.preventDefault(),m.hasClass("dropdown-toggle")||(d.removeClass("active"),d.eq(e).addClass("active").children("a").focus(),m.focus())):d.eq(e).focus();else if(!m.is("input")){var q,r,s=[];d.each(function(){a(this).parent().hasClass("disabled")||a.trim(a(this).text().toLowerCase()).substring(0,1)==p[c.keyCode]&&s.push(a(this).parent().index())}),q=a(document).data("keycount"),q++,a(document).data("keycount",q),r=a.trim(a(":focus").text().toLowerCase()).substring(0,1),r!=p[c.keyCode]?(q=1,a(document).data("keycount",q)):q>=s.length&&(a(document).data("keycount",0),q>s.length&&(q=1)),d.eq(s[q-1]).focus()}if((/(13|32)/.test(c.keyCode.toString(10))||/(^9$)/.test(c.keyCode.toString(10))&&o.options.selectOnTab)&&l){if(/(32)/.test(c.keyCode.toString(10))||c.preventDefault(),o.options.liveSearch)/(32)/.test(c.keyCode.toString(10))||(o.$menu.find(".active a").click(),m.focus());else{var t=a(":focus");t.click(),t.focus(),c.preventDefault()}a(document).data("keycount",0)}(/(^9$|27)/.test(c.keyCode.toString(10))&&l&&(o.multiple||o.options.liveSearch)||/(27)/.test(c.keyCode.toString(10))&&!l)&&(o.$menu.parent().removeClass("open"),o.$button.focus())}},mobile:function(){this.$element.addClass("mobile-device").appendTo(this.$newElement),this.options.container&&this.$menu.hide()},refresh:function(){this.$lis=null,this.reloadLi(),this.render(),this.setWidth(),this.setStyle(),this.checkDisabled(),this.liHeight()},hide:function(){this.$newElement.hide()},show:function(){this.$newElement.show()},remove:function(){this.$newElement.remove(),this.$element.remove()}};var f=a.fn.selectpicker;a.fn.selectpicker=d,a.fn.selectpicker.Constructor=e,a.fn.selectpicker.noConflict=function(){return a.fn.selectpicker=f,this},a(document).data("keycount",0).on("keydown",".bootstrap-select [data-toggle=dropdown], .bootstrap-select [role=menu], .bs-searchbox input",e.prototype.keydown).on("focusin.modal",".bootstrap-select [data-toggle=dropdown], .bootstrap-select [role=menu], .bs-searchbox input",function(a){a.stopPropagation()}),a(window).on("load.bs.select.data-api",function(){a(".selectpicker").each(function(){var b=a(this);d.call(b,b.data())})})}(jQuery);
//# sourceMappingURL=bootstrap-select.js.map

/*!
 * Ajax Bootstrap Select
 *
 * Extends existing [Bootstrap Select] implementations by adding the ability to search via AJAX requests as you type. Originally for CROSCON.
 *
 * @version 1.3.2
 * @author Adam Heim - https://github.com/truckingsim
 * @link https://github.com/truckingsim/Ajax-Bootstrap-Select
 * @copyright 2015 Adam Heim
 * @license Released under the MIT license.
 *
 * Contributors:
 *   Mark Carver - https://github.com/markcarver
 *
 * Last build: 2015-05-15 6:42:55 PM CDT
 */
!(function ($, window) {

    /**
     * @class AjaxBootstrapSelect
     *
     * @param {jQuery|HTMLElement} element
     *   The select element this plugin is to affect.
     * @param {Object} [options={}]
     *   The options used to affect the desired functionality of this plugin.
     *
     * @return {AjaxBootstrapSelect|null}
     *   A new instance of this class or null if unable to instantiate.
     */
    var AjaxBootstrapSelect = function (element, options) {
        var i, l, plugin = this;
        options = options || {};

        /**
         * The select element this plugin is being attached to.
         * @type {jQuery}
         */
        this.$element = $(element);

        /**
         * The merged default and passed options.
         * @type {Object}
         */
        this.options = $.extend(true, {}, $.fn.ajaxSelectPicker.defaults, options);

        /**
         * Used for logging error messages.
         * @type {Number}
         */
        this.LOG_ERROR = 1;

        /**
         * Used for logging warning messages.
         * @type {Number}
         */
        this.LOG_WARNING = 2;

        /**
         * Used for logging informational messages.
         * @type {Number}
         */
        this.LOG_INFO = 3;

        /**
         * Used for logging debug messages.
         * @type {Number}
         */
        this.LOG_DEBUG = 4;

        /**
         * The jqXHR object of the last request, false if there was none.
         * @type {jqXHR|Boolean}
         */
        this.lastRequest = false;

        /**
         * The previous query that was requested.
         * @type {String}
         */
        this.previousQuery = '';

        /**
         * The current query being requested.
         * @type {String}
         */
        this.query = '';

        /**
         * The jqXHR object of the current request, false if there is none.
         * @type {jqXHR|Boolean}
         */
        this.request = false;

        // Maps deprecated options to new ones between releases.
        var deprecatedOptionsMap = [
            // @todo Remove these options in next minor release.
            {
                from: 'ajaxResultsPreHook',
                to: 'preprocessData'
            },
            {
                from: 'ajaxSearchUrl',
                to: {
                    ajax: {
                        url: '{{{value}}}'
                    }
                }
            },
            {
                from: 'ajaxOptions',
                to: 'ajax'
            },
            {
                from: 'debug',
                to: function (map) {
                    var _options = {};
                    _options.log = Boolean(plugin.options[map.from]) ? plugin.LOG_DEBUG : 0;
                    plugin.options = $.extend(true, {}, plugin.options, _options);
                    delete plugin.options[map.from];
                    plugin.log(plugin.LOG_WARNING, 'Deprecated option "' + map.from + '". Update code to use:', _options);
                }
            },
            {
                from: 'mixWithCurrents',
                to: 'preserveSelected'
            },
            {
                from: 'placeHolderOption',
                to: {
                    locale: {
                        emptyTitle: '{{{value}}}'
                    }
                }
            }
        ];
        if (deprecatedOptionsMap.length) {
            $.map(deprecatedOptionsMap, function (map) {
                // Depreciated option detected.
                if (plugin.options[map.from]) {
                    // Map with an object. Use "{{{value}}}" anywhere in the object to
                    // replace it with the passed value.
                    if ($.isPlainObject(map.to)) {
                        plugin.replaceValue(map.to, '{{{value}}}', plugin.options[map.from]);
                        plugin.options = $.extend(true, {}, plugin.options, map.to);
                        plugin.log(plugin.LOG_WARNING, 'Deprecated option "' + map.from + '". Update code to use:', map.to);
                        delete plugin.options[map.from];
                    }
                    // Map with a function. Functions are silos. They are responsible
                    // for deleting the original option and displaying debug info.
                    else if ($.isFunction(map.to)) {
                        map.to.apply(plugin, [map]);
                    }
                    // Map normally.
                    else {
                        var _options = {};
                        _options[map.to] = plugin.options[map.from];
                        plugin.options = $.extend(true, {}, plugin.options, _options);
                        plugin.log(plugin.LOG_WARNING, 'Deprecated option "' + map.from + '". Update code to use:', _options);
                        delete plugin.options[map.from];
                    }
                }
            });
        }

        // Retrieve the element data attributes.
        var data = this.$element.data();

        // @todo Deprecated. Remove this in the next minor release.
        if (data['searchUrl']) {
            plugin.log(plugin.LOG_WARNING, 'Deprecated attribute name: "data-search-url". Update markup to use: \' data-abs-ajax-url="' + data['searchUrl'] + '" \'');
            this.options.ajax.url = data['searchUrl'];
        }

        // Helper functions.
        var matchToLowerCase = function (match, p1) { return p1.toLowerCase(); };
        var expandObject = function (keys, value, obj) {
            var k = [].concat(keys), l = k.length, o = obj || {};
            if (l) { var key = k.shift(); o[key] = expandObject(k, value, o[key]); }
            return l ? o : value;
        };

        // Filter out only the data attributes prefixed with 'data-abs-'.
        var dataKeys = Object.keys(data).filter(/./.test.bind(new RegExp('^abs[A-Z]')));

        // Map the data attributes to their respective place in the options object.
        if (dataKeys.length) {
            // Object containing the data attribute options.
            var dataOptions = {};
            var flattenedOptions = ['locale'];
            for (i = 0, l = dataKeys.length; i < l; i++) {
                var name = dataKeys[i].replace(/^abs([A-Z])/, matchToLowerCase).replace(/([A-Z])/g, '-$1').toLowerCase();
                var keys = name.split('-');

                // Certain options should be flattened to a single object
                // and not fully expanded (such as Locale).
                if (keys[0] && keys.length > 1 && flattenedOptions.indexOf(keys[0]) !== -1) {
                    var newKeys = [keys.shift()];
                    var property = '';
                    // Combine the remaining keys as a single property.
                    for (var ii = 0; ii < keys.length; ii++) {
                        property += (ii === 0 ? keys[ii] : keys[ii].charAt(0).toUpperCase() + keys[ii].slice(1));
                    }
                    newKeys.push(property);
                    keys = newKeys;
                }
                this.log(this.LOG_DEBUG, 'Processing data attribute "data-abs-' + name + '":', data[dataKeys[i]]);
                expandObject(keys, data[dataKeys[i]], dataOptions);
            }
            this.options = $.extend(true, {}, this.options, dataOptions);
            this.log(this.LOG_DEBUG, 'Merged in the data attribute options: ', dataOptions, this.options);
        }

        /**
         * Reference to the selectpicker instance.
         * @type {Selectpicker}
         */
        this.selectpicker = data['selectpicker'];
        if (!this.selectpicker) {
            this.log(this.LOG_ERROR, 'Cannot instantiate an AjaxBootstrapSelect instance without selectpicker first being initialized!');
            return null;
        }

        // Ensure there is a URL.
        if (!this.options.ajax.url) {
            this.log(this.LOG_ERROR, 'Option "ajax.url" must be set! Options:', this.options);
            return null;
        }

        // Initialize the locale strings.
        this.locale = $.extend(true, {}, $.fn.ajaxSelectPicker.locale);

        // Ensure the langCode is properly set.
        this.options.langCode = this.options.langCode || window.navigator.userLanguage || window.navigator.language || 'en';
        if (!this.locale[this.options.langCode]) {
            var langCode = this.options.langCode;

            // Reset the language code.
            this.options.langCode = 'en';

            // Check for both the two and four character language codes, using
            // the later first.
            var langCodeArray = langCode.split('-');
            for (i = 0, l = langCodeArray.length; i < l; i++) {
                var code = langCodeArray.join('-');
                if (code.length && this.locale[code]) {
                    this.options.langCode = code;
                    break;
                }
                langCodeArray.pop();
            }
            this.log(this.LOG_WARNING, 'Unknown langCode option: "' + langCode + '". Using the following langCode instead: "' + this.options.langCode + '".');
        }

        // Allow options to override locale specific strings.
        this.locale[this.options.langCode] = $.extend(true, {}, this.locale[this.options.langCode], this.options.locale);

        /**
         * The select list.
         * @type {AjaxBootstrapSelectList}
         */
        this.list = new window.AjaxBootstrapSelectList(this);
        this.list.refresh();

        // We need for selectpicker to be attached first. Putting the init in a
        // setTimeout is the easiest way to ensure this.
        // @todo Figure out a better way to do this (hopefully listen for an event).
        setTimeout(function () {
            plugin.init();
        }, 500);
    };

    /**
     * Initializes this plugin on a selectpicker instance.
     */
    AjaxBootstrapSelect.prototype.init = function () {
        var requestDelayTimer, plugin = this;

        // Rebind select/deselect to process preserved selections.
        if (this.options.preserveSelected) {
            this.selectpicker.$menu.off('click', '.actions-btn').on('click', '.actions-btn', function (e) {
                if (plugin.selectpicker.options.liveSearch) {
                    plugin.selectpicker.$searchbox.focus();
                }
                else {
                    plugin.selectpicker.$button.focus();
                }
                e.preventDefault();
                e.stopPropagation();
                if ($(this).is('.bs-select-all')) {
                    if (plugin.selectpicker.$lis === null) {
                        plugin.selectpicker.$lis = plugin.selectpicker.$menu.find('li');
                    }
                    plugin.$element.find('option:enabled').prop('selected', true);
                    $(plugin.selectpicker.$lis).not('.disabled').addClass('selected');
                    plugin.selectpicker.render();
                }
                else {
                    if (plugin.selectpicker.$lis === null) {
                        plugin.selectpicker.$lis = plugin.selectpicker.$menu.find('li');
                    }
                    plugin.$element.find('option:enabled').prop('selected', false);
                    $(plugin.selectpicker.$lis).not('.disabled').removeClass('selected');
                    plugin.selectpicker.render();
                }
                plugin.selectpicker.$element.change();
            });
        }

        // Add placeholder text to the search input.
        this.selectpicker.$searchbox
            .attr('placeholder', this.t('searchPlaceholder'))
            // Remove selectpicker events on the search input.
            .off('input propertychange');

        // Bind this plugin's event.
        this.selectpicker.$searchbox.on(this.options.bindEvent, function (e) {
            var query = plugin.selectpicker.$searchbox.val();

            plugin.log(plugin.LOG_DEBUG, 'Bind event fired: "' + plugin.options.bindEvent + '", keyCode:', e.keyCode, e);

            // Dynamically ignore the "enter" key (13) so it doesn't
            // create an additional request if the "cache" option has
            // been disabled.
            if (!plugin.options.cache) {
                plugin.options.ignoredKeys[13] = 'enter';
            }

            // Don't process ignored keys.
            if (plugin.options.ignoredKeys[e.keyCode]) {
                plugin.log(plugin.LOG_DEBUG, 'Key ignored.');
                return;
            }

            // Clear out any existing timer.
            clearTimeout(requestDelayTimer);

            // Process empty search value.
            if (!query.length) {
                // Clear the select list.
                if (plugin.options.clearOnEmpty) {
                    plugin.list.destroy();
                }

                // Don't invoke a request.
                if (!plugin.options.emptyRequest) {
                    return;
                }
            }

            // Store the query.
            plugin.previousQuery = plugin.query;
            plugin.query = query;

            // Return the cached results, if any.
            if (plugin.options.cache && e.keyCode !== 13) {
                var cache = plugin.list.cacheGet(plugin.query);
                if (cache) {
                    plugin.list.setStatus(!cache.length ? plugin.t('statusNoResults') : '');
                    plugin.list.replaceOptions(cache);
                    plugin.log(plugin.LOG_INFO, 'Rebuilt options from cached data.');
                    return;
                }
            }

            requestDelayTimer = setTimeout(function () {
                // Abort any previous requests.
                if (plugin.lastRequest && plugin.lastRequest.jqXHR && $.isFunction(plugin.lastRequest.jqXHR.abort)) {
                    plugin.lastRequest.jqXHR.abort();
                }

                // Create a new request.
                plugin.request = new window.AjaxBootstrapSelectRequest(plugin);

                // Store as the previous request once finished.
                plugin.request.jqXHR.always(function () {
                    plugin.lastRequest = plugin.request;
                    plugin.request = false;
                });
            }, plugin.options.requestDelay || 300);
        });
    };

    /**
     * Wrapper function for logging messages to window.console.
     *
     * @param  {Number} type
     * The type of message to log. Must be one of:
     *
     * - AjaxBootstrapSelect.LOG_ERROR
     * - AjaxBootstrapSelect.LOG_WARNING
     * - AjaxBootstrapSelect.LOG_INFO
     * - AjaxBootstrapSelect.LOG_DEBUG
     *
     * @param {String|Object|*...} message
     *   The message(s) to log. Multiple arguments can be passed.
     *
     * @return {void}
     */
    AjaxBootstrapSelect.prototype.log = function (type, message) {
        if (window.console && this.options.log) {
            // Ensure the logging level is always an integer.
            if (typeof this.options.log !== 'number') {
                if (typeof this.options.log === 'string') {
                    this.options.log = this.options.log.toLowerCase();
                }
                switch (this.options.log) {
                    case true:
                    case 'debug':
                        this.options.log = this.LOG_DEBUG;
                        break;

                    case 'info':
                        this.options.log = this.LOG_INFO;
                        break;

                    case 'warn':
                    case 'warning':
                        this.options.log = this.LOG_WARNING;
                        break;

                    default:
                    case false:
                    case 'error':
                        this.options.log = this.LOG_ERROR;
                        break;
                }
            }
            if (type <= this.options.log) {
                var args = [].slice.apply(arguments, [2]);

                // Determine the correct console method to use.
                switch (type) {
                    case this.LOG_DEBUG:
                        type = 'debug';
                        break;
                    case this.LOG_INFO:
                        type = 'info';
                        break;
                    case this.LOG_WARNING:
                        type = 'warn';
                        break;
                    default:
                    case this.LOG_ERROR:
                        type = 'error';
                        break;
                }

                // Prefix the message.
                var prefix = '[' + type.toUpperCase() + '] AjaxBootstrapSelect:';
                if (typeof message === 'string') {
                    args.unshift(prefix + ' ' + message);
                }
                else {
                    args.unshift(message);
                    args.unshift(prefix);
                }

                // Display the message(s).
                window.console[type].apply(window.console, args);
            }
        }
    };

    /**
     * Replaces an old value in an object or array with a new value.
     *
     * @param {Object|Array} obj
     *   The object (or array) to iterate over.
     * @param {*} needle
     *   The value to search for.
     * @param {*} value
     *   The value to replace with.
     * @param {Object} [options]
     *   Additional options for restricting replacement:
     *     - recursive: {boolean} Whether or not to iterate over the entire
     *       object or array, defaults to true.
     *     - depth: {int} The number of level this method is to search
     *       down into child elements, defaults to false (no limit).
     *     - limit: {int} The number of times a replacement should happen,
     *       defaults to false (no limit).
     *
     * @return {void}
     */
    AjaxBootstrapSelect.prototype.replaceValue = function (obj, needle, value, options) {
        var plugin = this;
        options = $.extend({
            recursive: true,
            depth: false,
            limit: false
        }, options);
        // The use of $.each() opposed to native loops here is beneficial
        // since obj can be either an array or an object. This helps reduce
        // the amount of duplicate code needed.
        $.each(obj, function (k, v) {
            if (options.limit !== false && typeof options.limit === 'number' && options.limit <= 0) {
                return false;
            }
            if ($.isArray(obj[k]) || $.isPlainObject(obj[k])) {
                if ((options.recursive && options.depth === false) || (options.recursive && typeof options.depth === 'number' && options.depth > 0)) {
                    plugin.replaceValue(obj[k], needle, value, options);
                }
            }
            else {
                if (v === needle) {
                    if (options.limit !== false && typeof options.limit === 'number') {
                        options.limit--;
                    }
                    obj[k] = value;
                }
            }
        });
    };

    /**
     * Generates a translated {@link $.fn.ajaxSelectPicker.locale locale string} for a given locale key.
     *
     * @param {String} key
     *   The translation key to use.
     * @param {String} [langCode]
     *   Overrides the currently set {@link $.fn.ajaxSelectPicker.defaults#langCode langCode} option.
     *
     * @return
     *   The translated string.
     */
    AjaxBootstrapSelect.prototype.t = function (key, langCode) {
        langCode = langCode || this.options.langCode;
        if (this.locale[langCode] && this.locale[langCode].hasOwnProperty(key)) {
            return this.locale[langCode][key];
        }
        this.log(this.LOG_WARNING, 'Unknown translation key:', key);
        return key;
    };

    /**
     * Use an existing definition in the Window object or create a new one.
     *
     * Note: This must be the last statement of this file.
     *
     * @type {AjaxBootstrapSelect}
     * @ignore
     */
    window.AjaxBootstrapSelect = window.AjaxBootstrapSelect || AjaxBootstrapSelect;

    /**
     * @class AjaxBootstrapSelectList
     *   Maintains the select options and selectpicker menu.
     *
     * @param {AjaxBootstrapSelect} plugin
     *   The plugin instance.
     *
     * @return {AjaxBootstrapSelectList}
     *   A new instance of this class.
     */
    var AjaxBootstrapSelectList = function (plugin) {
        var that = this;

        /**
         * DOM element used for updating the status of requests and list counts.
         * @type {jQuery}
         */
        this.$status = $(plugin.options.templates.status).hide().appendTo(plugin.selectpicker.$menu);
        var statusInitialized = plugin.t('statusInitialized');
        if (statusInitialized && statusInitialized.length) {
            this.setStatus(statusInitialized);
        }

        /**
         * Container for cached data.
         * @type {Object}
         */
        this.cache = {};

        /**
         * Reference the plugin for internal use.
         * @type {AjaxBootstrapSelect}
         */
        this.plugin = plugin;

        /**
         * Container for current selections.
         * @type {Array}
         */
        this.selected = [];

        /**
         * Containers for previous titles.
         */
        this.title = null;
        this.selectedTextFormat = plugin.selectpicker.options.selectedTextFormat;

        // Preserve selected options.
        if (plugin.options.preserveSelected) {
            plugin.$element.on('change.abs.preserveSelected', function (e) {
                var $selected = plugin.$element.find(':selected');
                that.selected = [];
                // If select does not have multiple selection, ensure that only the
                // last selected option is preserved.
                if (!plugin.selectpicker.multiple) {
                    $selected = $selected.last();
                }
                $selected.each(function () {
                    var $option = $(this);
                    var value = $option.attr('value');
                    that.selected.push({
                        value: value,
                        text: $option.text(),
                        'class': $option.attr('class') || '',
                        data: $option.data() || {},
                        preserved: true,
                        selected: true
                    });
                });
                that.replaceOptions(that.cacheGet(that.plugin.query));
            });
        }
    };

    /**
     * Builds the options for placing into the element.
     *
     * @param {Array} data
     *   The data to use when building options for the select list. Each
     *   array item must be an Object structured as follows:
     *     - {int|string} value: Required, a unique value identifying the
     *       item. Optionally not required if divider is passed instead.
     *     - {boolean} [divider]: Optional, if passed all other values are
     *       ignored and this item becomes a divider.
     *     - {string} [text]: Optional, the text to display for the item.
     *       If none is provided, the value will be used.
     *     - {String} [class]: Optional, the classes to apply to the option.
     *     - {boolean} [disabled]: Optional, flag that determines if the
     *       option is disabled.
     *     - {boolean} [selected]: Optional, flag that determines if the
     *       option is selected. Useful only for select lists that have the
     *       "multiple" attribute. If it is a single select list, each item
     *       that passes this property as true will void the previous one.
     *     - {Object} [data]: Optional, the additional data attributes to
     *       attach to the option element. These are processed by the
     *       bootstrap-select plugin.
     *
     * @return {String}
     *   HTML containing the <option> elements to place in the element.
     */
    AjaxBootstrapSelectList.prototype.build = function (data) {
        var a, i, l = data.length;
        var $select = $('<select/>');
        var $preserved = $('<optgroup/>').attr('label', this.plugin.t('currentlySelected'));

        this.plugin.log(this.plugin.LOG_DEBUG, 'Building the select list options from data:', data);

        for (i = 0; i < l; i++) {
            var item = data[i];
            var $option = $('<option/>').appendTo(item.preserved ? $preserved : $select);

            // Detect dividers.
            if (item.hasOwnProperty('divider')) {
                $option.attr('data-divider', 'true');
                continue;
            }

            // Set various properties.
            $option.val(item.value).text(item.text);
            if (item['class'].length) {
                $option.attr('class', item['class']);
            }
            if (item.disabled) {
                $option.attr('disabled', true);
            }

            // Remove previous selections, if necessary.
            if (item.selected && !this.plugin.selectpicker.multiple) {
                $select.find(':selected').prop('selected', false);
            }

            // Set this option's selected state.
            if (item.selected) {
                $option.attr('selected', true);
            }

            // Add data attributes.
            for (a in item.data) {
                if (item.data.hasOwnProperty(a)) {
                    $option.attr('data-' + a, item.data[a]);
                }
            }
        }

        // Append the preserved selections.
        if ($preserved.find('option').length) {
            $preserved[this.plugin.options.preserveSelectedPosition === 'before' ? 'prependTo' : 'appendTo']($select);
        }

        var options = $select.html();
        this.plugin.log(this.plugin.LOG_DEBUG, options);
        return options;
    };

    /**
     * Retrieve data from the cache.
     *
     * @param {string} key
     *   The identifier name of the data to retrieve.
     * @param {*} [defaultValue]
     *   The default value to return if no cache data is available.
     *
     * @return {*}
     *   The cached data or defaultValue.
     */
    AjaxBootstrapSelectList.prototype.cacheGet = function (key, defaultValue) {
        var value = this.cache[key] || defaultValue;
        this.plugin.log(this.LOG_DEBUG, 'Retrieving cache:', key, value);
        return value;
    };

    /**
     * Save data to the cache.
     *
     * @param {string} key
     *   The identifier name of the data to store.
     * @param {*} value
     *   The value of the data to store.
     *
     * @return {void}
     */
    AjaxBootstrapSelectList.prototype.cacheSet = function (key, value) {
        this.cache[key] = value;
        this.plugin.log(this.LOG_DEBUG, 'Saving to cache:', key, value);
    };

    /**
     * Destroys the select list.
     */
    AjaxBootstrapSelectList.prototype.destroy = function () {
        this.replaceOptions();
        this.plugin.list.setStatus();
        this.plugin.log(this.plugin.LOG_DEBUG, 'Destroyed select list.');
    };

    /**
     * Refreshes the select list.
     */
    AjaxBootstrapSelectList.prototype.refresh = function (triggerChange) {
        // Remove unnecessary "min-height" from selectpicker.
        this.plugin.selectpicker.$menu.css('minHeight', 0);
        this.plugin.selectpicker.$menu.find('> .inner').css('minHeight', 0);
        var emptyTitle = this.plugin.t('emptyTitle');
        if (!this.plugin.$element.find('option').length && emptyTitle && emptyTitle.length) {
            this.setTitle(emptyTitle);
        }
        else if (this.title) {
            this.restoreTitle();
        }
        this.plugin.selectpicker.refresh();
        // The "refresh" method sets the $lis property to null, it must be rebuilt.
        this.plugin.selectpicker.findLis();

        // Only trigger change event when specified.
        if(triggerChange){
            this.plugin.log(this.plugin.LOG_DEBUG, 'Triggering Change');
            this.plugin.$element.trigger('change.$');
        }
        this.plugin.log(this.plugin.LOG_DEBUG, 'Refreshed select list.');
    };

    /**
     * Replaces the select list options with provided data.
     *
     * It will also inject any preserved selections if the preserveSelected
     * option is enabled.
     *
     * @param {Array} data
     *   The data array to process.
     *
     * @returns {void}
     */
    AjaxBootstrapSelectList.prototype.replaceOptions = function (data) {
        var i, l, item, output = '', processedData = [], selected = [], seenValues = [];
        data = data || [];

        // Merge in selected options from the previous state (cannot be cached).
        if (this.selected && this.selected.length) {
            this.plugin.log(this.plugin.LOG_INFO, 'Processing preserved selections:', this.selected);
            selected = [].concat(this.selected, data);
            l = selected.length;
            for (i = 0; i < l; i++) {
                item = selected[i];
                // Typecast the value for the seenValues array. Array indexOf
                // searches are type sensitive.
                if (item.hasOwnProperty('value') && seenValues.indexOf(item.value + '') === -1) {
                    seenValues.push(item.value + '');
                    processedData.push(item);
                }
                else {
                    this.plugin.log(this.plugin.LOG_DEBUG, 'Duplicate item found, ignoring.');
                }
            }
            data = processedData;
        }

        // Build the option output.
        if (data.length) {
            output = this.plugin.list.build(data);
        }

        // Replace the options.
        this.plugin.$element.html(output);
        this.refresh();
        this.plugin.log(this.plugin.LOG_DEBUG, 'Replaced options with data:', data);
    };

    /**
     * Restores the select list to the last saved state.
     *
     * @return {boolean}
     *   Return true if successful or false if no states are present.
     */
    AjaxBootstrapSelectList.prototype.restore = function () {
        var cache = this.plugin.list.cacheGet(this.plugin.previousQuery);
        if (cache && this.plugin.list.replaceOptions(cache)) {
            this.plugin.log(this.plugin.LOG_DEBUG, 'Restored select list to the previous query: ', this.plugin.previousQuery);
        }
        this.plugin.log(this.plugin.LOG_DEBUG, 'Unable to restore select list to the previous query:', this.plugin.previousQuery);
        return false;
    };

    /**
     * Restores the previous title of the select element.
     *
     * @return {void}
     */
    AjaxBootstrapSelectList.prototype.restoreTitle = function () {
        if (!this.plugin.request) {
            this.plugin.selectpicker.options.selectedTextFormat = this.selectedTextFormat;
            if (this.title) {
                this.plugin.$element.attr('title', this.title);
            }
            else {
                this.plugin.$element.removeAttr('title');
            }
            this.title = null;
        }
    };

    /**
     * Sets a new title on the select element.
     *
     * @param {String} title
     *
     * @return {void}
     */
    AjaxBootstrapSelectList.prototype.setTitle = function (title) {
        if (!this.plugin.request) {
            this.title = this.plugin.$element.attr('title');
            this.plugin.selectpicker.options.selectedTextFormat = 'static';
            this.plugin.$element.attr('title', title);
        }
    };

    /**
     * Sets a new status on the AjaxBootstrapSelectList.$status DOM element.
     *
     * @param {String} [status]
     *   The new status to set, if empty it will hide it.
     *
     * @return {void}
     */
    AjaxBootstrapSelectList.prototype.setStatus = function (status) {
        status = status || '';
        if (status.length) {
            this.$status.html(status).show();
        }
        else {
            this.$status.html('').hide();
        }
    };

    /**
     * Use an existing definition in the Window object or create a new one.
     *
     * Note: This must be the last statement of this file.
     *
     * @type {AjaxBootstrapSelectList}
     * @ignore
     */
    window.AjaxBootstrapSelectList = window.AjaxBootstrapSelectList || AjaxBootstrapSelectList;

    /**
     * @class AjaxBootstrapSelectRequest
     *   Instantiates a new jQuery.ajax request for the current query.
     *
     * @param {AjaxBootstrapSelect} plugin
     *   The plugin instance.
     *
     * @return {AjaxBootstrapSelectRequest}
     *   A new instance of this class.
     */
    var AjaxBootstrapSelectRequest = function (plugin) {
        var that = this;
        var ajaxCallback = function (event) {
            return function () {
                that.plugin.log(that.plugin.LOG_INFO, 'Invoking AjaxBootstrapSelectRequest.' + event + ' callback:', arguments);
                that[event].apply(that, arguments);
                if (that.callbacks[event]) {
                    that.plugin.log(that.plugin.LOG_INFO, 'Invoking ajax.' + event + ' callback:', arguments);
                    that.callbacks[event].apply(that, arguments);
                }
            };
        };
        var events = ['beforeSend', 'success', 'error', 'complete'];
        var i, l = events.length;

        // Reference the existing plugin.
        this.plugin = plugin;

        // Clone the default ajax options.
        this.options = $.extend(true, {}, plugin.options.ajax);

        // Save any existing callbacks provided in the options and replace it with
        // the relevant method callback. The provided callback will be invoked
        // after this plugin has executed.
        this.callbacks = {};
        for (i = 0; i < l; i++) {
            var event = events[i];
            if (this.options[event] && $.isFunction(this.options[event])) {
                this.callbacks[event] = this.options[event];
            }
            this.options[event] = ajaxCallback(event);
        }

        // Allow the data option to be dynamically generated.
        if (this.options.data && $.isFunction(this.options.data)) {
            this.options.data = this.options.data.apply(this) || {
                q: '{{{q}}}'
            };
        }

        // Replace all data values that contain "{{{q}}}" with the value of the
        // current search query.
        this.plugin.replaceValue(this.options.data, '{{{q}}}', this.plugin.query);

        // Invoke the AJAX request.
        this.jqXHR = $.ajax(this.options);
    };

    /**
     * @event
     * A callback that can be used to modify the jqXHR object before it is sent.
     *
     * Use this to set custom headers, etc. Returning false will cancel the request.
     * To modify the options being sent, use this.options.
     *
     * @param {jqXHR} jqXHR
     *   The jQuery wrapped XMLHttpRequest object.
     *
     * @return {void}
     */
    AjaxBootstrapSelectRequest.prototype.beforeSend = function (jqXHR) {
        // Destroy the list currently there.
        this.plugin.list.destroy();

        // Set the status accordingly.
        this.plugin.list.setStatus(this.plugin.t('statusSearching'));

        //this.plugin.list.refresh();
    };

    /**
     * @event
     * The "complete" callback for the request.
     *
     * @param {jqXHR} jqXHR
     *   The jQuery wrapped XMLHttpRequest object.
     * @param {String} status
     *   A string categorizing the status of the request: "success", "notmodified",
     *   "error", "timeout", "abort", or "parsererror".
     *
     * @return {void}
     */
    AjaxBootstrapSelectRequest.prototype.complete = function (jqXHR, status) {
        // Only continue if actual results and not an aborted state.
        if (status !== 'abort') {
            var cache = this.plugin.list.cacheGet(this.plugin.query);
            if (cache) {
                if (cache.length) {
                    this.plugin.list.setStatus();
                }
                else {
                    this.plugin.list.destroy();
                    this.plugin.list.setStatus(this.plugin.t('statusNoResults'));
                    this.plugin.log(this.plugin.LOG_INFO, 'No results were returned.');
                    return;
                }
            }
            this.plugin.list.refresh(true);
        }
    };

    /**
     * @event
     * The "error" callback for the request.
     *
     * @param {jqXHR} jqXHR
     *   The jQuery wrapped XMLHttpRequest object.
     * @param {String} status
     *   A string describing the type of error that occurred. Possible values for
     *   the second argument (besides null) are "timeout", "error", "abort", and
     *   "parsererror".
     * @param {String|Object} error
     *   An optional exception object, if one occurred. When an HTTP error occurs,
     *   error receives the textual portion of the HTTP status, such as "Not Found"
     *   or "Internal Server Error."
     *
     * @return {void}
     */
    AjaxBootstrapSelectRequest.prototype.error = function (jqXHR, status, error) {
        if (status !== 'abort') {
            // Cache the result data.
            this.plugin.list.cacheSet(this.plugin.query);

            // Clear the list.
            if (this.plugin.options.clearOnError) {
                this.plugin.list.destroy();
            }

            // Set the status after the list has cleared and before the restore.
            this.plugin.list.setStatus(this.plugin.t('errorText'));

            // Restore previous request.
            if (this.plugin.options.restoreOnError) {
                this.plugin.list.restore();
                this.plugin.list.setStatus();
            }
        }
    };

    /**
     * Process incoming data.
     *
     * This method ensures that the incoming data has unique values and
     * is in the proper format that is utilized by this plugin. It also
     * adds in the existing selects if the option is enabled. If the
     * preprocessData and processData functions were defined in the plugin
     * options, they are invoked here.
     *
     * @param {Array|Object} data
     *   The JSON data to process.
     *
     * @return {Array|Boolean}
     *   The processed data array or false if an error occurred.
     */
    AjaxBootstrapSelectRequest.prototype.process = function (data) {
        var i, l, callbackResult, item, preprocessedData, processedData;
        var filteredData = [], seenValues = [];

        this.plugin.log(this.plugin.LOG_INFO, 'Processing raw data for:', this.plugin.query, data);

        // Invoke the preprocessData option callback.
        preprocessedData = data;
        if ($.isFunction(this.plugin.options.preprocessData)) {
            this.plugin.log(this.plugin.LOG_DEBUG, 'Invoking preprocessData callback:', this.plugin.options.processData);
            callbackResult = this.plugin.options.preprocessData.apply(this, [preprocessedData]);
            if (typeof callbackResult !== 'undefined' && callbackResult !== null && callbackResult !== false) {
                preprocessedData = callbackResult;
            }
        }

        // Ensure the data is an array.
        if (!$.isArray(preprocessedData)) {
            this.plugin.log(this.plugin.LOG_ERROR, 'The data returned is not an Array. Use the "preprocessData" callback option to parse the results and construct a proper array for this plugin.', preprocessedData);
            return false;
        }

        // Filter preprocessedData.
        l = preprocessedData.length;
        for (i = 0; i < l; i++) {
            item = preprocessedData[i];
            this.plugin.log(this.plugin.LOG_DEBUG, 'Processing item:', item);
            if ($.isPlainObject(item)) {
                // Check if item is a divider. If so, ignore all other data.
                if (item.hasOwnProperty('divider') || (item.hasOwnProperty('data') && $.isPlainObject(item.data) && item.data.divider)) {
                    this.plugin.log(this.plugin.LOG_DEBUG, 'Item is a divider, ignoring provided data.');
                    filteredData.push({divider: true});
                }
                // Ensure item has a "value" and is unique.
                else {
                    if (item.hasOwnProperty('value')) {
                        // Typecast the value for the seenValues array. Array
                        // indexOf searches are type sensitive.
                        if (seenValues.indexOf(item.value + '') === -1) {
                            seenValues.push(item.value + '');
                            // Provide default items to ensure expected structure.
                            item = $.extend({
                                text: item.value,
                                'class': '',
                                data: {},
                                disabled: false,
                                selected: false
                            }, item);
                            filteredData.push(item);
                        }
                        else {
                            this.plugin.log(this.plugin.LOG_DEBUG, 'Duplicate item found, ignoring.');
                        }
                    }
                    else {
                        this.plugin.log(this.plugin.LOG_DEBUG, 'Data item must have a "value" property, skipping.');
                    }
                }
            }
        }

        // Invoke the processData option callback.
        processedData = [].concat(filteredData);
        if ($.isFunction(this.plugin.options.processData)) {
            this.plugin.log(this.plugin.LOG_DEBUG, 'Invoking processData callback:', this.plugin.options.processData);
            callbackResult = this.plugin.options.processData.apply(this, [processedData]);
            if (typeof callbackResult !== 'undefined' && callbackResult !== null && callbackResult !== false) {
                if ($.isArray(callbackResult)) {
                    processedData = callbackResult;
                }
                else {
                    this.plugin.log(this.plugin.LOG_ERROR, 'The processData callback did not return an array.', callbackResult);
                    return false;
                }
            }
        }

        // Cache the processed data.
        this.plugin.list.cacheSet(this.plugin.query, processedData);

        this.plugin.log(this.plugin.LOG_INFO, 'Processed data:', processedData);
        return processedData;
    };

    /**
     * @event
     * The "success" callback for the request.
     *
     * @param {Object} data
     *   The data returned from the server, formatted according to the dataType
     *   option.
     * @param {String} status
     *   A string describing the status.
     * @param {jqXHR} jqXHR
     *   The jQuery wrapped XMLHttpRequest object.
     *
     * @return {void}
     */
    AjaxBootstrapSelectRequest.prototype.success = function (data, status, jqXHR) {
        // Only process data if an Array or Object.
        if (!$.isArray(data) && !$.isPlainObject(data)) {
            this.plugin.log(this.plugin.LOG_ERROR, 'Request did not return a JSON Array or Object.', data);
            this.plugin.list.destroy();
            return;
        }

        // Process the data.
        var processedData = this.process(data);
        this.plugin.list.replaceOptions(processedData);
    };

    /**
     * Use an existing definition in the Window object or create a new one.
     *
     * Note: This must be the last statement of this file.
     *
     * @type {AjaxBootstrapSelectRequest}
     * @ignore
     */
    window.AjaxBootstrapSelectRequest = window.AjaxBootstrapSelectRequest || AjaxBootstrapSelectRequest;

    /**
     * @class $.fn.ajaxSelectPicker
     * @chainable
     *
     * The jQuery plugin definition.
     *
     * This initializes a new AjaxBootstrapSelect class for each element in the jQuery chain.
     *
     * @param {Object} options
     *   The {@link $.fn.ajaxSelectPicker.defaults options} to pass to the plugin.
     *
     * @returns {jQuery}
     */
    $.fn.ajaxSelectPicker = function (options) {
        return this.each(function () {
            if (!$(this).data('AjaxBootstrapSelect')) {
                $(this).data('AjaxBootstrapSelect', new window.AjaxBootstrapSelect(this, options));
            }
        });
    };

    /**
     * The locale object containing string translations.
     *
     * See: {@link $.fn.ajaxSelectPicker.locale}
     * @type {Object}
     */
    $.fn.ajaxSelectPicker.locale = {};

    /**
     * The default options the plugin will use if none are provided.
     *
     * See: {@link $.fn.ajaxSelectPicker.defaults}
     *
     * @member $.fn.ajaxSelectPicker
     * @property {Object} defaults
     */
    $.fn.ajaxSelectPicker.defaults = {
        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @deprecated Since version `1.2.0`, see: {@link $.fn.ajaxSelectPicker.defaults#preprocessData}.
         * @cfg {Function} ajaxResultsPreHook
         */

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {Object} ajax (required)
         * @markdown
         * The options to pass to the jQuery AJAX request.
         *
         * ```js
         * {
     *     url: null, // Required.
     *     type: 'POST',
     *     dataType: 'json',
     *     data: {
     *         q: '{{{q}}}'
     *     }
     * }
         * ```
         */
        ajax: {
            url: null,
            type: 'POST',
            dataType: 'json',
            data: {
                q: '{{{q}}}'
            }
        },

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {String} ajaxSearchUrl
         * @deprecated Since version `1.2.0`, see: {@link $.fn.ajaxSelectPicker.defaults#ajax}.
         */

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {String} bindEvent = "keyup"
         * @markdown
         * The event to bind on the search input element to fire a request.
         */
        bindEvent: 'keyup',

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {Boolean} cache = true
         * @markdown
         * Cache previous requests. If enabled, the "enter" key (13) is enabled to
         * allow users to force a refresh of the request.
         */
        cache: true,

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {Boolean} clearOnEmpty = true
         * @markdown
         * Clears the previous results when the search input has no value.
         */
        clearOnEmpty: true,

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {Boolean} clearOnError = true
         * @markdown
         * Clears the select list when the request returned with an error.
         */
        clearOnError: true,

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {Boolean} debug
         * @deprecated Since version `1.2.0`, see: {@link $.fn.ajaxSelectPicker.defaults#log}.
         */

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {Boolean} emptyRequest = false
         * @markdown
         * Invoke a request for empty search values.
         */
        emptyRequest: false,

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {Object} ignoredKeys
         * @markdown
         * Key codes to ignore so a request is not invoked with bindEvent. The
         * "enter" key (13) will always be dynamically added to any list provided
         * unless the "cache" option above is set to "true".
         *
         * ```js
         * {
     *     9: "tab",
     *     16: "shift",
     *     17: "ctrl",
     *     18: "alt",
     *     27: "esc",
     *     37: "left",
     *     39: "right",
     *     38: "up",
     *     40: "down",
     *     91: "meta",
     *     229: "unknown"
     * }
         * ```
         */
        ignoredKeys: {
            9: "tab",
            16: "shift",
            17: "ctrl",
            18: "alt",
            27: "esc",
            37: "left",
            39: "right",
            38: "up",
            40: "down",
            91: "meta",
            229: "unknown"
        },

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {String} langCode = null
         * @markdown
         * The language code to use for string translation. By default this value
         * is determined by the browser, however it is not entirely reliable. If
         * you encounter inconsistencies, you may need to manually set this option.
         */
        langCode: null,

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {Object} locale = null
         * @markdown
         * Provide specific overrides for {@link $.fn.ajaxSelectPicker.locale locale string} translations. Values
         * set here will cause the plugin to completely ignore defined locale string
         * translations provided by the set language code. This is useful when
         * needing to change a single value or when being used in a system that
         * provides its own translations, like a CMS.
         *
         * ```js
         * locale: {
     *     searchPlaceholder: Drupal.t('Find...')
     * }
         * ```
         */
        locale: null,

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {String|Number|Number} log = 'error'
         * @markdown
         * Determines the amount of logging that is displayed:
         *
         * - __0, false:__ Display no information from the plugin.
         * - __1, 'error':__ Fatal errors that prevent the plugin from working.
         * - __2, 'warn':__ Warnings that may impact the display of request data, but does not prevent the plugin from functioning.
         * - __3, 'info':__ Provides additional information, generally regarding the from request data and callbacks.
         * - __4, true, 'debug':__ Display all possible information. This will likely be highly verbose and is only recommended for development purposes or tracing an error with a request.
         */
        log: 'error',

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {Boolean} mixWithCurrents
         * @deprecated Since version `1.2.0`, see: {@link $.fn.ajaxSelectPicker.defaults#preserveSelected}.
         */

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg placeHolderOption
         * @deprecated Since version `1.2.0`, see: {@link $.fn.ajaxSelectPicker.locale#emptyTitle}.
         */

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {Function|null} preprocessData = function(){}
         * @markdown
         * Process the raw data returned from a request.
         *
         * The following arguments are passed to this callback:
         *
         * - __data__ - `Array` The raw data returned from the request, passed by reference.
         *
         * This callback must return one of the following:
         *
         * - `Array` - A new array of items. This will replace the passed data.
         * - `undefined|null|false` - Stops the callback and will use whatever modifications have been made to data.
         *
         * ```js
         * function (data) {
     *     var new = [], old = [], other = [];
     *     for (var i = 0; i < data.length; i++) {
     *         // Add items flagged as "new" to the correct array.
     *         if (data[i].new) {
     *             new.push(data[i]);
     *         }
     *         // Add items flagged as "old" to the correct array.
     *         else if (data[i].old) {
     *             old.push(data[i]);
     *         }
     *         // Something out of the ordinary happened, put these last.
     *         else {
     *             other.push(data[i]);
     *         }
     *     }
     *     // Sort the data according to the order of these arrays.
     *     return [].concat(new, old, other).
     * }
         * ```
         */
        preprocessData: function(){},

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {Boolean} preserveSelected = true
         * @markdown
         * Preserve selected items(s) between requests. When enabled, they will be
         * placed in an `<optgroup>` with the label `Currently Selected`. Disable
         * this option if you send your currently selected items along with your
         * request and let the server handle this responsibility.
         */
        preserveSelected: true,

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {String} preserveSelectedPosition = 'after'
         * @markdown
         * Place the currently selected options `'before'` or `'after'` the options
         * returned from the request.
         */
        preserveSelectedPosition: 'after',

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {Function|null} processData = function(){}
         * @markdown
         * Process the data returned after this plugin, but before the list is built.
         */
        processData: function(){},

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {Number} requestDelay = 300
         * @markdown
         * The amount of time, in milliseconds, that must pass before a request
         * is initiated. Each time the {@link $.fn.ajaxSelectPicker.defaults#bindEvent bindEvent} is fired, it will cancel the
         * current delayed request and start a new one.
         */
        requestDelay: 300,

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {Boolean} restoreOnError = false
         * @markdown
         * Restores the select list with the previous results when the request
         * returns with an error.
         */
        restoreOnError: false,

        /**
         * @member $.fn.ajaxSelectPicker.defaults
         * @cfg {Object} templates
         * @markdown
         * The DOM templates used in this plugin.
         *
         * ```js
         * templates: {
     *     // The placeholder for status updates pertaining to the list and request.
     *     status: '<div class="status"></div>',
     * }
         * ```
         */
        templates: {
            status: '<div class="status"></div>'
        }
    };

    /*
     * Note: You do not have to load this translation file. English is the
     * default language of this plugin and is compiled into it automatically.
     *
     * This file is just to serve as the default string mappings and as a
     * template for future translations.
     * @see: ./src/js/locale/en-US.js
     *
     * Four character language codes are supported ("en-US") and will always
     * take precedence over two character language codes ("en") if present.
     *
     * When copying this file, remove all comments except the one above the
     * definition objection giving credit to the translation author.
     */

    /*!
     * English translation for the "en-US" and "en" language codes.
     * Mark Carver <mark.carver@me.com>
     */
    $.fn.ajaxSelectPicker.locale['en-US'] = {
        /**
         * @member $.fn.ajaxSelectPicker.locale
         * @cfg {String} currentlySelected = 'Currently Selected'
         * @markdown
         * The text to use for the label of the option group when currently selected options are preserved.
         */
        currentlySelected: 'Currently Selected',

        /**
         * @member $.fn.ajaxSelectPicker.locale
         * @cfg {String} emptyTitle = 'Select and begin typing'
         * @markdown
         * The text to use as the title for the select element when there are no items to display.
         */
        emptyTitle: 'Select and begin typing',

        /**
         * @member $.fn.ajaxSelectPicker.locale
         * @cfg {String} errorText = ''Unable to retrieve results'
         * @markdown
         * The text to use in the status container when a request returns with an error.
         */
        errorText: 'Unable to retrieve results',

        /**
         * @member $.fn.ajaxSelectPicker.locale
         * @cfg {String} searchPlaceholder = 'Search...'
         * @markdown
         * The text to use for the search input placeholder attribute.
         */
        searchPlaceholder: 'Search...',

        /**
         * @member $.fn.ajaxSelectPicker.locale
         * @cfg {String} statusInitialized = 'Start typing a search query'
         * @markdown
         * The text used in the status container when it is initialized.
         */
        statusInitialized: 'Start typing a search query',

        /**
         * @member $.fn.ajaxSelectPicker.locale
         * @cfg {String} statusNoResults = 'No Results'
         * @markdown
         * The text used in the status container when the request returns no results.
         */
        statusNoResults: 'No Results',

        /**
         * @member $.fn.ajaxSelectPicker.locale
         * @cfg {String} statusSearching = 'Searching...'
         * @markdown
         * The text to use in the status container when a request is being initiated.
         */
        statusSearching: 'Searching...'
    };
    $.fn.ajaxSelectPicker.locale.en = $.fn.ajaxSelectPicker.locale['en-US'];

})(jQuery, window);