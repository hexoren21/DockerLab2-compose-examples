FROM --platform=$BUILDPLATFORM node:18-slim as build

RUN mkdir /project
WORKDIR /project

COPY package.json ./
#RUN npm install --save-dev @angular-devkit/build-angular

RUN npm install -g @angular/cli@13.3.11

COPY . .

RUN npm run build --prod
FROM nginx:alpine
COPY --from=builder /project/dist/my-welcome-app /usr/share/nginx/html

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
