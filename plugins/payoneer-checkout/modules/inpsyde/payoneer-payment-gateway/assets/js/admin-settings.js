!function(e,t,r){r((function(){let o=function(e,t){let o=t.find("[group=sandbox_credentials]"),n=t.find("[group=live_credentials]");o.add(n).each((function(){r(this).attr("readonly","readonly")})),t.find(`[group = ${e}]`).each((function(){r(this).removeAttr("readonly")}))},n=function(e){return e?"live_credentials":"sandbox_credentials"},a=r("#woocommerce_payoneer-checkout_live_mode"),i=a.closest("form");a.on("change",(function(){let e=this.checked,t=r(this).closest("form");o(n(e),t)})),o(n(a.prop("checked")),i);const c=()=>confirm(PayoneerData.i18n.confirmReset);t.querySelectorAll("textarea.code.css").forEach((t=>{e.wp.codeEditor.initialize(t)})),t.querySelectorAll("button[data-target]").forEach((e=>{e.addEventListener("click",(r=>{t.querySelector(e.dataset.target).dispatchEvent(new CustomEvent("reset",{detail:e.dataset.default})),r.preventDefault()}))})),t.querySelectorAll("#mainform input").forEach((e=>{e.addEventListener("reset",(t=>{c()&&(e.value=t.detail)}))})),t.querySelectorAll("#mainform textarea").forEach((e=>{e.addEventListener("reset",(t=>{c()&&(e.innerHTML=t.detail,r(e).next(".CodeMirror")[0].CodeMirror.setValue(e.value),r(e).next(".CodeMirror")[0].CodeMirror.refresh())}))}))}))}(top,document,jQuery);
//# sourceMappingURL=admin-settings.js.map