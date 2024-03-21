import "./index.css"

export const Secondary = ({label, onClick}) => {
  return (
    <button className="button-19-hidden" onClick={onClick}>
      <p>{label}</p>
    </button>
  );
};

