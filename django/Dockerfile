FROM --platform=$BUILDPLATFORM python:3.9-slim AS builder
WORKDIR /app
COPY requirements.txt .
RUN pip install --user --no-cache-dir -r requirements.txt

FROM --platform=$BUILDPLATFORM python:3.9-slim
WORKDIR /app
COPY --from=builder /root/.local /root/.local
COPY . /app

RUN adduser --disabled-password --gecos '' myuser
USER myuser

RUN python manage.py collectstatic --noinput

ENV PYTHONUNBUFFERED 1

CMD ["gunicorn", "--bind", "0.0.0.0:8000", "myproject.wsgi:application"]