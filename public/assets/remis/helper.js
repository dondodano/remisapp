function perfectScrollInit()
{
    let ps = $('.perfect-sc');
    if(ps.length > 0)
    {
        for(let i=0; i<ps.length; i++)
        {
            new PerfectScrollbar('#perfect-'+i);
        }
    }
}

$(document).ready(function(){
    perfectScrollInit()
})

const dropdowns = document.querySelectorAll('.dropdown-toggle')
const dropdown = [...dropdowns].map((dropdownToggleEl) => new bootstrap.Dropdown(dropdownToggleEl, {
    popperConfig(defaultBsPopperConfig) {
        return { ...defaultBsPopperConfig, strategy: 'fixed' };
    }
}));
