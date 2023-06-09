import React, { useEffect, useState } from 'react';
import axios from 'axios';
import './ProductList.css'; // Import CSS file for custom styles

const ProductList = () => {
    const [products, setProducts] = useState([]);

    useEffect(() => {
        const fetchProducts = async () => {
            try {
                const response = await axios.get('http://127.0.0.1:8000/api/get-productLaza');
                setProducts(response.data);
                console.log(response.data);
            } catch (error) {
                console.error('Error fetching products:', error);
            }
        };

        fetchProducts();
    }, []);

    return (
        <div className="product-list-container">
            {products.map((product) => (
                <div key={product.id} className="product-item">
                    <img src={product.image} alt={product.name} className="product-image" />
                    <h3 className="product-name">{product.name}</h3>
                    <p className="product-price">Price: {product.price}</p>
                    <p className="product-owner"> {product.show_owner}</p>
                </div>
            ))}
        </div>
    );
};

export default ProductList;
