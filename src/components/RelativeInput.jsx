import React from 'react';

const RelativeInput = ({ index, relative, handleRelativeChange, handleRemoveRelative }) => {
  return (
    <div className="relative-input">
      <input
        type="text"
        name="name"
        placeholder={`Relative ${index + 1} Name`}
        value={relative.name}
        onChange={(e) => handleRelativeChange(index, e)}
      />
      <button type="button" onClick={() => handleRemoveRelative(index)}>
        Remove
      </button>
    </div>
  );
};

export default RelativeInput;
