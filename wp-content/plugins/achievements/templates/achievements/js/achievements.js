/*! http://wordpress.org/plugins/achievements/ */
var achievements={heartbeat:null,template:function(a,b){return _.memoize(function(){var c,d={evaluate:/<#([\s\S]+?)#>/g,interpolate:/\{\{\{([\s\S]+?)\}\}\}/g,escape:/\{\{([^\}]+?)\}\}(?!\})/g,variable:"data"};return function(){return c=c||_.template(jQuery("#tmpl-"+a).html(),null,d),c(b)}})}};!function(a){var b=function(){function b(){g=document[i]===!1}function c(b){var c=a(document.createDocumentFragment()),d=a("#dpa-toaster");if(_.each(b,function(a){c.append(achievements.template("achievements-item",a))}),d.length<1){var e=a(document.createDocumentFragment());e.append(achievements.template("achievements-wrapper")),a("body").append(e),d=a("#dpa-toaster")}c.insertAfter(d.children(":first-child")),d.fadeIn(200)}function d(b,d){f="wp-auth-check"in d&&d["wp-auth-check"]===!0,"achievements"in d&&(window.setTimeout(function(){var b=a("#dpa-toaster");b.fadeOut(100,function(){a(this).children("li").remove()})},7e3),c(d.achievements))}function e(a,b){f&&g&&(wp.heartbeat.isQueued("achievements")||(b.achievements={type:"notifications"}))}var f=!0,g=!0,h="",i="";"undefined"!=typeof document.hidden?(h="visibilitychange",i="hidden"):"undefined"!=typeof document.mozHidden?(h="mozvisibilitychange",i="mozHidden"):"undefined"!=typeof document.msHidden?(h="msvisibilitychange",i="msHidden"):"undefined"!=typeof document.webkitHidden&&(h="webkitvisibilitychange",i="webkitHidden"),this.isUserLoggedIn=function(){return f},this.isWindowVisible=function(){return g},a(document).ready(function(){a(document).on("heartbeat-tick.achievements",d).on("heartbeat-send.achievements",e).on(h+".achievements",b),wp.heartbeat.connectNow()})};achievements.heartbeat=new b}(jQuery);