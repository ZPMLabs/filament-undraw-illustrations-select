<div>
  <style>
    .undraw-select .fi-dropdown-list{
      display: grid !important;
      grid-template-columns: repeat(4, minmax(0, 1fr));
      gap: 8px;
      padding: 8px;
      list-style: none;
      margin: 0;
    }
    
    @media (max-width: 1024px){
      .undraw-select .fi-dropdown-list{
        grid-template-columns: repeat(3, minmax(0, 1fr));
      }
    }
    @media (max-width: 640px){
      .undraw-select .fi-dropdown-list{
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }
    }
    @media (max-width: 480px){
      .undraw-select .fi-dropdown-list{
        grid-template-columns: 1fr;
      }
    }

    .undraw-select .fi-select-input-option{
      display: block;
      border: 1px solid #e5e7eb;
      border-radius: 12px;
      background: #fff;
      cursor: pointer;
      padding: 8px;
      box-shadow: 0 1px 2px rgb(0 0 0 / 0.04);
       transition:
        transform 160ms ease,
        box-shadow 160ms ease,
        border-color 160ms ease,
        background-color 160ms ease;
       will-change: transform;
    }

    .undraw-select .fi-select-input-option:hover,
    .undraw-select .fi-select-input-option:focus-visible{
        transform: translateY(-2px) scale(1.02);
        box-shadow: 0 8px 24px rgba(0,0,0,.08);
        border-color: #60a5fa;
        background-color: rgba(96,165,250,.06);
    }
    
    @media (prefers-reduced-motion: reduce){
        .undraw-select .fi-select-input-option{
            transition: none;
            transform: none;
        }
    }
    
    .undraw-select .fi-select-input-option > span{
      display: block;
    }
    
    .undraw-select .fi-select-input-option img{
      width: 100%;
      height: 96px;
      object-fit: contain;
      display: block;
    }
    
    .undraw-select .fi-dropdown{ max-height: 22rem; overflow: auto; }
  </style>

  @include('filament-forms::components.select')
</div>
