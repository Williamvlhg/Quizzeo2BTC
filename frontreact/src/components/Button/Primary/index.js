import './index.css';
export const Primary = ({ label, onClick }) => {
    
    return(
      <div>
          <button className="button-19" onClick={onClick}><p>{ label }</p></button>
      </div>
  );
};