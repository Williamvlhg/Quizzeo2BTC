import "./index.css"

export const Secondary = ({label, onClick}) => {
  return (
    <button className="buttonSecondary" onClick={onClick}>
      <p>{label}</p>
    </button>
  );
};

