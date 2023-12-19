<?php

namespace Bookboon\ActionModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '/action', singleton: true)]
class Action
{
    protected ?string $alias = null;
    protected string $application = '';

    /** @var Attribute[] $attributes */
    protected array $attributes = [];
    protected string $browser = '';
    protected ?int $browserVersion = null;
    protected ?string $clientIp = null;
    protected string $currentUrl = '';
    protected ?\DateTime $deviceTimestamp = null;

    /** @var string[]|null $featureFlags */
    protected ?array $featureFlags = null;
    protected string $handle = '';
    protected string $initialReferrer = '';
    protected string $name = '';
    protected ?string $nonce = null;
    protected string $os = '';
    protected string $referrer = '';
    protected int $screenHeight = 0;
    protected int $screenWidth = 0;
    protected string $sessionId = '';
    protected ?string $uiLanguage = null;
    protected ?string $userAgent = null;

    public function setAlias(?string $alias): void
    {
        $this->alias = $alias;
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setApplication(string $application): void
    {
        $this->application = $application;
    }

    public function getApplication(): string
    {
        return $this->application;
    }

    /**
     * @param Attribute[] $attributes
     */
    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @return Attribute[]
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function setBrowser(string $browser): void
    {
        $this->browser = $browser;
    }

    public function getBrowser(): string
    {
        return $this->browser;
    }

    public function setBrowserVersion(?int $browserVersion): void
    {
        $this->browserVersion = $browserVersion;
    }

    public function getBrowserVersion(): ?int
    {
        return $this->browserVersion;
    }

    public function setClientIp(?string $clientIp): void
    {
        $this->clientIp = $clientIp;
    }

    public function getClientIp(): ?string
    {
        return $this->clientIp;
    }

    public function setCurrentUrl(string $currentUrl): void
    {
        $this->currentUrl = $currentUrl;
    }

    public function getCurrentUrl(): string
    {
        return $this->currentUrl;
    }

    public function setDeviceTimestamp(?\DateTime $deviceTimestamp): void
    {
        $this->deviceTimestamp = $deviceTimestamp;
    }

    public function getDeviceTimestamp(): ?\DateTime
    {
        return $this->deviceTimestamp;
    }

    /**
     * @param string[]|null $featureFlags
     */
    public function setFeatureFlags(?array $featureFlags): void
    {
        $this->featureFlags = $featureFlags;
    }

    /**
     * @return string[]|null
     */
    public function getFeatureFlags(): ?array
    {
        return $this->featureFlags;
    }

    public function setHandle(string $handle): void
    {
        $this->handle = $handle;
    }

    public function getHandle(): string
    {
        return $this->handle;
    }

    public function setInitialReferrer(string $initialReferrer): void
    {
        $this->initialReferrer = $initialReferrer;
    }

    public function getInitialReferrer(): string
    {
        return $this->initialReferrer;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setNonce(?string $nonce): void
    {
        $this->nonce = $nonce;
    }

    public function getNonce(): ?string
    {
        return $this->nonce;
    }

    public function setOs(string $os): void
    {
        $this->os = $os;
    }

    public function getOs(): string
    {
        return $this->os;
    }

    public function setReferrer(string $referrer): void
    {
        $this->referrer = $referrer;
    }

    public function getReferrer(): string
    {
        return $this->referrer;
    }

    public function setScreenHeight(int $screenHeight): void
    {
        $this->screenHeight = $screenHeight;
    }

    public function getScreenHeight(): int
    {
        return $this->screenHeight;
    }

    public function setScreenWidth(int $screenWidth): void
    {
        $this->screenWidth = $screenWidth;
    }

    public function getScreenWidth(): int
    {
        return $this->screenWidth;
    }

    public function setSessionId(string $sessionId): void
    {
        $this->sessionId = $sessionId;
    }

    public function getSessionId(): string
    {
        return $this->sessionId;
    }

    public function setUiLanguage(?string $uiLanguage): void
    {
        $this->uiLanguage = $uiLanguage;
    }

    public function getUiLanguage(): ?string
    {
        return $this->uiLanguage;
    }

    public function setUserAgent(?string $userAgent): void
    {
        $this->userAgent = $userAgent;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }
}
