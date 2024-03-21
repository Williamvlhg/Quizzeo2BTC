import './index.css';
export const Primary = ({ Label, OnClick }) => {
    
    return(
      <div>
          <button className="button-19" onClick={OnClick}><p>{ Label }</p></button>
      </div>
  );
};