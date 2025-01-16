# Use the Bitnami Laravel image
FROM bitnami/laravel:latest

# Set working directory
WORKDIR /app

# Copy the Laravel project files to the container
COPY . .


# Expose the Laravel default port
EXPOSE 8000
