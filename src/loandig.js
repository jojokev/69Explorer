export class Spinner {
    constructor(config) {
      
        this.el = document.querySelector(config.selector);
        if(!this.el){
            return;
           }
        this.createStyle();
        this.text = config.text ?? 'Cargando';
        this.color = config.color ?? '#000';
        this.width= config.width ?? '30';
        this.height= config.height ?? '30';
        this.background= config.background ?? '#fff'
        this.create = document.createElement('div');
        this._createSpinner();
    }
    _createSpinner() {
        //  let template=document.createElement('div')
        this.create.style.position = "absolute"
        this.create.style.display = "none";
        this.create.style.justifyContent ="center";
        this.create.style.inset = "0";
        this.create.style.opacity = "0";
        this.create.style.alignItems = "center"
        this.create.style.backgroundColor =this.background;
        this.create.innerHTML = `
     <span class="spins" style=" 
        border: 2px solid rgba(0, 0, 0, 0.1);
        width: ${this.width}px;
        height: ${this.height}px;
        border-radius: 50%;
        border-left-color: ${this.color};
        display:inline-block;
        margin-left: 7px;
        animation: loading 1s ease infinite;">
     </span>
     <span style=" margin-left: 9px;font-size: 14px;color: ${this.color}">
       ${this.text}
     </span>`;
        //  this.create=template;
        this.el.append(this.create);
    };
    active() {
        this.el.setAttribute('disabled', 'disabled');
        this.create.style.display = "flex";
        this.create.style.opacity = "1";
    }
    hide() {
        this.el.removeAttribute('disabled');
        this.create.style.display = "none";
        this.create.style.opacity = "0";
    }
    createStyle() {
        let style = document.createElement('style');
        style.type = "text/css";
        style.innerHTML = `
            @keyframes loading {
                from {
                transform: rotate(0deg);
                }
                to {
                transform: rotate(360deg);
                }
            }

            .loading {
                animation: loading 1s ease infinite;
            }
            `;
        document.head.appendChild(style);
    }
}