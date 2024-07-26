import React, { useState } from 'react';
import axios from 'axios';
import ChildInput from './ChildInput';
import RelativeInput from './RelativeInput';
import './RegistrationForm.css'

const RegistrationForm = () => {
  const [formData, setFormData] = useState({
    name: '',
    partner: '',
    email: '',
    telephone: '',
    children: [{ name: '', age: '' }],
    relatives: [{ name: '' }],
  });

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData({
      ...formData,
      [name]: value,
    });
  };

  const handleChildChange = (index, e) => {
    const { name, value } = e.target;
    const newChildren = formData.children.map((child, i) => (
      i === index ? { ...child, [name]: value } : child
    ));
    setFormData({
      ...formData,
      children: newChildren,
    });
  };

  const handleAddChild = () => {
    setFormData({
      ...formData,
      children: [...formData.children, { name: '', age: '' }],
    });
  };

  const handleRemoveChild = (index) => {
    const newChildren = formData.children.filter((_, i) => i !== index);
    setFormData({
      ...formData,
      children: newChildren,
    });
  };

  const handleRelativeChange = (index, e) => {
    const { name, value } = e.target;
    const newRelatives = formData.relatives.map((relative, i) => (
      i === index ? { ...relative, [name]: value } : relative
    ));
    setFormData({
      ...formData,
      relatives: newRelatives,
    });
  };

  const handleAddRelative = () => {
    setFormData({
      ...formData,
      relatives: [...formData.relatives, { name: '' }],
    });
  };

  const handleRemoveRelative = (index) => {
    const newRelatives = formData.relatives.filter((_, i) => i !== index);
    setFormData({
      ...formData,
      relatives: newRelatives,
    });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    axios.post('/register', formData)
      .then(response => {
        // Handle success
        console.log(response.data);
      })
      .catch(error => {
        // Handle error
        console.error(error);
      });
  };

  return (
    <form onSubmit={handleSubmit}>
      <div className="form-group">
        <label>
        Szülő 1 neve:
        </label>
        <input type="text" name="name" value={formData.name} onChange={handleChange} />
      </div>
      <div className="form-group">
        <label>
        Szülő 2 neve:
        </label>
        <input type="text" name="partner" value={formData.partner} onChange={handleChange} />
      </div>
      <div className="form-group">
        <label>
        E-mail cím:
        </label>
        <input type="email" name="email" value={formData.email} onChange={handleChange} />
      </div>
      <div className="form-group">
        <label>
        Tel. szám:
        </label>
        <input type="text" name="telephone" value={formData.telephone} onChange={handleChange} />
      </div>
      <div>
        <h3>Gyerekek</h3>
        {formData.children.map((child, index) => (
          <ChildInput
            key={index}
            index={index}
            child={child}
            handleChildChange={handleChildChange}
            handleRemoveChild={handleRemoveChild}
          />
        ))}
        <button type="button" onClick={handleAddChild}>Add Child</button>
      </div>
      <div>
        <h3>Vendégek</h3>
        {formData.relatives.map((relative, index) => (
          <RelativeInput
            key={index}
            index={index}
            relative={relative}
            handleRelativeChange={handleRelativeChange}
            handleRemoveRelative={handleRemoveRelative}
          />
        ))}
        <button type="button" onClick={handleAddRelative}>Add Relative</button>
      </div>
      <button type="submit">Register</button>
    </form>
  );
};

export default RegistrationForm;
