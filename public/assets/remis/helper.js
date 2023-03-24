function perfectScrollInit()
{
    let ps = $('.perfect-sc');
    if(ps.length > 1)
    {
        for(let i=0; i<ps; i++)
        {
            new PerfectScrollbar('#perfect-'+i);
        }
    }else{
        try{
            new PerfectScrollbar('#' + ps.attr('id'));
        }catch(err){}
    }

}

/*function $offcanvas(config = {})
{
    let canvasId = config.canvasId === undefined ? 'offcanvasWithBothOptions' : config.canvasId;
    let canvasTitle = config.canvasTitle === undefined ? 'Edit' : config.canvasTitle;
    let canvasContent = config.canvasContent === undefined ? '' : config.canvasContent;
    let canvasHasCancel = config.canvasCancel === undefined ? false : config.canvasCancel;
    let canvasHasAccept = config.canvasAccept === undefined ? false : config.canvasAccept;
    let canvasBtnAccept = config.canvasBtnAccept === undefined ? '' : config.canvasBtnAccept;

    this.canvas = function(content)
    {
        return '<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="'+canvasId+'" aria-labelledby="'+canvasId+'Label">'+content+'</div>';
    }

    this.canvasHeader = function(content)
    {
        let header = '<div class="offcanvas-header">';
            header += '<h5 class="offcanvas-title" id="'+canvasId+'Label">'+content+'</h5>';
            header += '<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" dismiss-offcanvas aria-label="Close"></button>';
            header += '</div>';

        return header;
    }

    this.canvasBody = function(content)
    {
        let body = '<div class="offcanvas-body">';
            if(typeof canvasContent === 'function')
            {
                body += content();
            }else if(typeof canvasContent === 'string'){
                body += canvasContent;
            }else if(Array.isArray(canvasContent)){
                body += canvasContent.join("");
            }

            body += '<div class="divider"><div class="divider-text"><i class="bx bx-down-arrow-circle"></i></div></div>';

            if(canvasHasCancel == true)
            {
                body += '<button type="button" class="btn btn-outline-secondary d-grid w-100" data-bs-dismiss="offcanvas" dismiss-offcanvas>Close</button>';
                body += '</div>';
            }

            if(canvasHasAccept == true)
            {
                body +=  this.canvasAccept();
            }

            body += '</div>';
            return body;
    }

    this.canvasAccept = function()
    {
        let btnText = canvasBtnAccept.text === undefined ? 'Accept' : canvasBtnAccept.text;
        let btnClass = canvasBtnAccept.class === undefined ? '' : canvasBtnAccept.class;
        let btnType = canvasBtnAccept.type === undefined ? 'submit' : canvasBtnAccept.type;

        let btnId = canvasBtnAccept.id === undefined ? '' : 'id="'+canvasBtnAccept.id+'"';
        let btnTitle = canvasBtnAccept.title === undefined ? '' : 'title="'+canvasBtnAccept.title+'"';
        let btnAttrs = canvasBtnAccept.attr === undefined ? '' : canvasBtnAccept.attr;

        return '<button type="'+btnType+'" class="btn '+btnClass+' d-grid w-100" '+[btnId, btnTitle, btnAttrs ].join(" ")+' ><span id="btntext">'+btnText+'</span></button>';
    }

    this.canvasForm = function(content = [])
    {
        let form = '<form enctype="multipart/form-data" method="POST" id="'+canvasId+'" >';
        form += '<input type="hidden" name="_token" value="'+$('meta[name="csrf-token"]').attr('content')+'">';
        form += content.join("");
        form += '</form>';

    return form;
    }

    let createCanvas = this.canvas(
        this.canvasForm([
            this.canvasHeader(canvasTitle),
            this.canvasBody(canvasContent)
        ])
    );

    let offcanvas = $('#'+canvasId);
    if(offcanvas.length == 0)
    {
        $('body').append(createCanvas);
    }
    $('#'+canvasId).offcanvas('toggle')
}

function $modal(config = {})
{
    let modalTitle = config.modalTitle === undefined ? 'Browse' : config.modalTitle;
    let modalId = config.modalId === undefined ? 'backDrop' : config.modalId;
    let modalSize = config.modalSize === undefined ? 'modal-sm' : config.modalSize;
    let modalFormId = config.modalFormId  === undefined ? 'formBackDrop' : config.modalFormId;
    let modalHasCancel = config.modalCancel === undefined ? true : config.modalCancel;
    let modalHasAccept = config.modalAccept === undefined ? false : config.modalAccept;
    let modalBtnAccept = config.modalBtnAccept === undefined ? '' : config.modalBtnAccept;
    let modalContent = config.modalContent === undefined ? '' : config.modalContent;


    this.backdrop = function(content){
        return '<div class="modal fade" id="'+modalId+'Modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" data-backdrop="static" data-keyboard="false">' + content + '</div>';
    }

    this.dialog = function(content)
    {
        return '<div  class="modal-dialog '+modalSize+'">'+content+'</div>';
    }

    this.modalForm = function(content = [])
    {
        let form = '<form class="modal-content" enctype="multipart/form-data" method="POST" id="'+modalFormId+'" >';
            form += '<input type="hidden" name="_token" value="'+$('meta[name="csrf-token"]').attr('content')+'">';
            form += content.join("");
            form += '</form>';

        return form;
    }

    this.modalHeader = function(content)
    {
        let header = '<div class="modal-header">';
          header += '<h5 class="modal-title" id="'+modalId+'ModalTitle">'+content+'</h5>';
          header += '<button type="button" class="btn-close" dismiss-modal aria-label="Close"></button>';
          header += '</div>';

          return header;
    }

    this.modalBody = function(content)
    {
        let body = '<div  class="modal-body mb-'+modalId+'">';
        if(typeof modalContent === 'function')
        {
            body += content();
        }else if(typeof modalContent === 'string')
        {
            body += modalContent;
        }
        else if(Array.isArray(modalContent))
        {
            body += modalContent.join("");
        }
        body += '</div>';
        return body;
    }

    this.modalFooter = function()
    {
        let footer = '<div class="modal-footer">';
        if(modalHasCancel == true)
        {
            footer += '<button type="button" class="btn btn-outline-secondary" dismiss-modal >Close</button>';
        }

        if(modalHasAccept == true)
        {
            footer += this.modalAccept();
        }

        footer += '</div>';
        return footer;
    }

    this.modalAccept = function()
    {
        let btnText = modalBtnAccept.text === undefined ? 'Accept' : modalBtnAccept.text;
        let btnClass = modalBtnAccept.class === undefined ? '' : modalBtnAccept.class;
        let btnType = modalBtnAccept.type === undefined ? 'submit' : modalBtnAccept.type;

        let btnId = modalBtnAccept.id === undefined ? '' : 'id="'+modalBtnAccept.id+'"';
        let btnTitle = modalBtnAccept.title === undefined ? '' : 'title="'+modalBtnAccept.title+'"';
        let btnAttrs = modalBtnAccept.attr === undefined ? '' : modalBtnAccept.attr;

        return '<button type="'+btnType+'" class="btn '+btnClass+'" '+[btnId, btnTitle, btnAttrs ].join(" ")+' >'+btnText+'</button>';
    }

    let createModal = this.backdrop(
        this.dialog(
            this.modalForm([
                this.modalHeader(modalTitle),
                this.modalBody(modalContent),
                this.modalFooter()
            ])
        )
    );

    let modals = $('#'+modalId+'Modal');
    if(modals.length == 0)
    {
        $('body').append(createModal);
    }
    $('#'+modalId+'Modal').modal('toggle')
}*/


$(document).ready(function(){
    perfectScrollInit()
})

