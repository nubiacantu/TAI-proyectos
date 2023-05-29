(()=>{"use strict";var t={496:t=>{t.exports=require("vscode")},81:t=>{t.exports=require("child_process")},147:t=>{t.exports=require("fs")},17:t=>{t.exports=require("path")}},e={};function s(i){var r=e[i];if(void 0!==r)return r.exports;var o=e[i]={exports:{}};return t[i](o,o.exports,s),o.exports}var i={};(()=>{var t=i;Object.defineProperty(t,"__esModule",{value:!0}),t.deactivate=t.activate=void 0;const e=s(17),r=s(147),o=s(81),n=s(496);function a(t){return new Promise(((e,s)=>{r.exists(t,(t=>{e(t)}))}))}const c=["build","compile","watch"];function u(t){for(const e of c)if(-1!==t.indexOf(e))return!0;return!1}const d=["test"];function h(t){for(const e of d)if(-1!==t.indexOf(e))return!0;return!1}let l,f;function p(){return l||(l=n.window.createOutputChannel("Grunt Auto Detection")),l}function w(){n.window.showWarningMessage(n.l10n.t("Problem finding grunt tasks. See the output for more information."),n.l10n.t("Go to output")).then((()=>{p().show(!0)}))}async function g(t){let s;const i=process.platform;return s="win32"===i&&await a(e.join(t,"node_modules",".bin","grunt.cmd"))?e.join(".","node_modules",".bin","grunt.cmd"):"linux"!==i&&"darwin"!==i||!await a(e.join(t,"node_modules",".bin","grunt"))?"grunt":e.join(".","node_modules",".bin","grunt"),s}class k{constructor(t,e){this.c=t,this.d=e}get workspaceFolder(){return this.c}isEnabled(){return"on"===n.workspace.getConfiguration("grunt",this.c.uri).get("autoDetect")}start(){const t=e.join(this.c.uri.fsPath,"{node_modules,[Gg]runtfile.js}");this.a=n.workspace.createFileSystemWatcher(t),this.a.onDidChange((()=>this.b=void 0)),this.a.onDidCreate((()=>this.b=void 0)),this.a.onDidDelete((()=>this.b=void 0))}async getTasks(){return this.isEnabled()?(this.b||(this.b=this.e()),this.b):[]}async getTask(t){const e=t.definition,s=e.task;if(s){const t={cwd:this.workspaceFolder.uri.fsPath},i="grunt";return-1===s.indexOf(" ")?new n.Task(e,this.workspaceFolder,s,i,new n.ShellExecution(`${await this.d}`,[s,...e.args],t)):new n.Task(e,this.workspaceFolder,s,i,new n.ShellExecution(`${await this.d}`,[`"${s}"`,...e.args],t))}}async e(){const t="file"===this.c.uri.scheme?this.c.uri.fsPath:void 0,s=[];if(!t)return s;if(!await a(e.join(t,"gruntfile.js"))&&!await a(e.join(t,"Gruntfile.js")))return s;const i=`${await this.d} --help --no-color`;try{const{stdout:e,stderr:s}=await(r=i,c={cwd:t},new Promise(((t,e)=>{o.exec(r,c,((s,i,r)=>{s&&e({error:s,stdout:i,stderr:r}),t({stdout:i,stderr:r})}))})));s&&(p().appendLine(s),w());const a=[];if(e){const t=e.split(/\r{0,1}\n/);let s=!1,i=!1;for(const e of t)if(0!==e.length)if(s||i){if(s&&!i)if(0===e.indexOf("Tasks run in the order specified"))i=!0;else{const t=/^\s*(\S.*\S)  \S/g.exec(e);if(t&&2===t.length){const e=t[1],s={type:"grunt",task:e},i="grunt",r={cwd:this.workspaceFolder.uri.fsPath},o=-1===e.indexOf(" ")?new n.Task(s,this.workspaceFolder,e,i,new n.ShellExecution(`${await this.d} ${e}`,r)):new n.Task(s,this.workspaceFolder,e,i,new n.ShellExecution(`${await this.d} "${e}"`,r));a.push(o);const c=e.toLowerCase();u(c)?o.group=n.TaskGroup.Build:h(c)&&(o.group=n.TaskGroup.Test)}}}else 0===e.indexOf("Available tasks")&&(s=!0)}return a}catch(t){const e=p();return t.stderr&&e.appendLine(t.stderr),t.stdout&&e.appendLine(t.stdout),e.appendLine(n.l10n.t("Auto detecting Grunt for folder {0} failed with error: {1}', this.workspaceFolder.name, err.error ? err.error.toString() : 'unknown")),w(),s}var r,c}dispose(){this.b=void 0,this.a&&this.a.dispose()}}class b{constructor(){this.b=new Map}start(){const t=n.workspace.workspaceFolders;t&&this.c(t,[]),n.workspace.onDidChangeWorkspaceFolders((t=>this.c(t.added,t.removed))),n.workspace.onDidChangeConfiguration(this.d,this)}dispose(){this.a&&(this.a.dispose(),this.a=void 0),this.b.clear()}c(t,e){for(const t of e){const e=this.b.get(t.uri.toString());e&&(e.dispose(),this.b.delete(t.uri.toString()))}for(const e of t){const t=new k(e,g(e.uri.fsPath));this.b.set(e.uri.toString(),t),t.isEnabled()&&t.start()}this.e()}d(){for(const t of this.b.values())t.dispose(),this.b.delete(t.workspaceFolder.uri.toString());const t=n.workspace.workspaceFolders;if(t)for(const e of t)if(!this.b.has(e.uri.toString())){const t=new k(e,g(e.uri.fsPath));this.b.set(e.uri.toString(),t),t.isEnabled()&&t.start()}this.e()}e(){if(!this.a&&this.b.size>0){const t=this;this.a=n.tasks.registerTaskProvider("grunt",{provideTasks:()=>t.getTasks(),resolveTask:e=>t.getTask(e)})}else this.a&&0===this.b.size&&(this.a.dispose(),this.a=void 0)}getTasks(){return this.f()}f(){if(0===this.b.size)return Promise.resolve([]);if(1===this.b.size)return this.b.values().next().value.getTasks();{const t=[];for(const e of this.b.values())t.push(e.getTasks().then((t=>t),(()=>[])));return Promise.all(t).then((t=>{const e=[];for(const s of t)s&&s.length>0&&e.push(...s);return e}))}}async getTask(t){if(0!==this.b.size){if(1===this.b.size)return this.b.values().next().value.getTask(t);if(t.scope!==n.TaskScope.Workspace&&t.scope!==n.TaskScope.Global&&t.scope){const e=this.b.get(t.scope.uri.toString());if(e)return e.getTask(t)}}}}t.activate=function(t){f=new b,f.start()},t.deactivate=function(){f.dispose()}})();var r=exports;for(var o in i)r[o]=i[o];i.__esModule&&Object.defineProperty(r,"__esModule",{value:!0})})();
//# sourceMappingURL=https://ticino.blob.core.windows.net/sourcemaps/b3e4e68a0bc097f0ae7907b217c1119af9e03435/extensions/grunt/dist/main.js.map