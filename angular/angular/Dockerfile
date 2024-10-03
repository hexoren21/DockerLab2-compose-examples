FROM --platform=$BUILDPLATFORM node:18-slim as builder

RUN mkdir /project
WORKDIR /project

COPY package.json ./

RUN npm install -g @angular/cli@13.3.11

COPY . .

RUN npm run builder --prod
FROM nginx:alpine
COPY --from=builder /project/dist/my-welcome-app /usr/share/nginx/html

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
