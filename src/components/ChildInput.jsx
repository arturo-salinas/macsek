import React from 'react';

const ChildInput = ({ index, child, handleChildChange, handleRemoveChild }) => {
  return (
    <div className="child-input">
      <input
        type="text"
        name="name"
        placeholder={`Child ${index + 1} Name`}
        value={child.name}
        onChange={(e) => handleChildChange(index, e)}
      />
      <input
        type="number"
        name="age"
        placeholder="Age"
        value={child.age}
        onChange={(e) => handleChildChange(index, e)}
      />
      <button type="button" onClick={() => handleRemoveChild(index)}>
        Remove
      </button>
    </div>
  );
};

export default ChildInput;
